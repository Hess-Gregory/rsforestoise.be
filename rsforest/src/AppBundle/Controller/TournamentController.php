<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Tournament;
use AppBundle\Entity\TournamentPool;
use AppBundle\Entity\TournamentRegistration;
use AppBundle\Form\TournamentRegistrationAddType;
use AppBundle\Form\TournamentAddType;
use AppBundle\Form\TournamentEditType;
use AppBundle\Form\TournamentPoolAddType;
use AppBundle\Form\TournamentPoolEditType;

class TournamentController extends Controller
{
    /* FrontEnd */
    public function frontEndTournamentDefaultAction()
    {   
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $page = $em->getRepository('AppBundle:Page')->findOneByName('Tournois');

        $tournaments = $em->getRepository('AppBundle:Tournament')->findAllTournamentsAvailable();

        $tournament = new TournamentRegistration;

        $form = $this->createForm(new TournamentRegistrationAddType(), $tournament);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em->persist($tournament);
                $em->flush();

                /* Send Email */

                $data = $form->getData();

                $mailer = $this->get('mailer');

                $message = \Swift_Message::newInstance()
                    ->setSubject('Inscription à un Tournoi')
                    ->setFrom($this->container->getParameter('mailer_address_from'))
                    ->setTo($this->container->getParameter('mailer_address_to_tournament'))
                    ->setContentType('text/html')
                    ->setBody('
                        <!DOCTYPE html>
                        <html lang="fr">
                            <body>
                                <p><b>'.$data->getName().'</b> vient de soumettre une inscription à un tournoi.</p>
                            </body>
                        </html>
                    ');

                $mailer->send($message);

                /* End Send Email */

                $this->get('session')->getFlashBag()->add('info', 'Merci pour votre inscription '.$data->getName());

                return $this->redirect($this->generateUrl('front_end_tournament_default'));
            }
        }

        return $this->render('AppBundle:FrontEnd:tournament_default.html.twig', array(
            'page' => $page,
            'tournaments' => $tournaments,
            'form' => $form->createView()
        ));
    }

    /* BackEnd */
    public function backEndTournamentDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tournaments = $em->getRepository('AppBundle:Tournament')->findAll();

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_default.html.twig', array(
            'tournaments' => $tournaments
        ));
    }
    
    public function backEndTournamentAddAction(Request $request)
    {
        $tournament = new Tournament;

        $form = $this->createForm(new TournamentAddType(), $tournament);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tournament);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$tournament->getDate()->format('d/m/Y').'" a été ajouté');

                return $this->redirect($this->generateUrl('back_end_tournament_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        $breadcrumbs->addItem('Ajouter un Tournoi');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_add.html.twig', array(
          'form' => $form->createView()
        ));        
    }
    
    public function backEndTournamentEditAction(Request $request, $tournamentId)
    {
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $form = $this->createForm(new TournamentEditType(), $tournament);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {   
                $em->persist($tournament);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$tournament->getDate()->format('d/m/Y').'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_tournament_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        $breadcrumbs->addItem('Modifier un Tournoi');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_edit.html.twig', array(
            'form' => $form->createView(),
            'tournament' => $tournament
        ));
    }

    public function backEndTournamentDeleteAction($tournamentId)
    {
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $em->remove($tournament);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', '"'.$tournament->getDate()->format('d/m/Y').'" a été supprimé');

        return $this->redirect($this->generateUrl('back_end_tournament_default'));  
    }

   public function backEndTournamentPoolAction($tournamentId) 
    {
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $tournamentPools = $em->getRepository('AppBundle:TournamentPool')->findAllPoolsByTournamentId($tournamentId);

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        $breadcrumbs->addItem('Groupes du "'.$tournament->getDate()->format('d/m/Y').'"');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_pool.html.twig', array(
            'tournament' => $tournament,
            'tournamentPools' => $tournamentPools
        ));
    }

    public function backEndTournamentPoolAddAction(Request $request, $tournamentId)
    {
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $tournamentPool = new TournamentPool;

        $form = $this->createForm(new TournamentPoolAddType(), $tournamentPool);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid()) 
            {
                $tournamentPool->setTournament($tournament);

                $em->persist($tournamentPool);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('info', '"'.$tournamentPool->getTeam().'" a été ajouté');

                return $this->redirect($this->generateUrl('back_end_tournament_pool', array('tournamentId' => $tournamentId)));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        $breadcrumbs->addItem('Groupes du '.$tournament->getDate()->format('d/m/Y'), $this->get('router')->generate('back_end_tournament_pool', array('tournamentId' => $tournamentId)));
        $breadcrumbs->addItem('Ajouter un Groupe');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_pool_add.html.twig', array(
          'form' => $form->createView(),
          'tournament' => $tournament
        ));        
    }
    
    public function backEndTournamentPoolEditAction(Request $request, $tournamentId, $tournamentPoolId)
    {   
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $tournamentPool = $em->getRepository('AppBundle:TournamentPool')->find($tournamentPoolId);

        $form = $this->createForm(new TournamentPoolEditType(), $tournamentPool);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
            if ($form->isValid())
            {   
                $em->persist($tournamentPool);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$tournamentPool->getTeam().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_tournament_pool', array('tournamentId' => $tournamentId)));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        $breadcrumbs->addItem('Groupes du '.$tournament->getDate()->format('d/m/Y'), $this->get('router')->generate('back_end_tournament_pool', array('tournamentId' => $tournamentId)));
        $breadcrumbs->addItem('Modifier un Groupe');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_pool_edit.html.twig', array(
            'form' => $form->createView(),
            'tournament' => $tournament,
            'tournamentPool' => $tournamentPool
        ));
    }

    public function backEndTournamentPoolDeleteAction(Request $request, $tournamentId, $tournamentPoolId)
    {
        $em = $this->getDoctrine()->getManager();

        $tournament = $em->getRepository('AppBundle:Tournament')->find($tournamentId);

        $tournamentPool = $em->getRepository('AppBundle:TournamentPool')->find($tournamentPoolId);

        $em->remove($tournamentPool);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', '"'.$tournamentPool->getTeam().'" a été supprimé');

        return $this->redirect($this->generateUrl('back_end_tournament_pool', array('tournamentId' => $tournamentId)));
    }

   public function backEndTournamentRegistrationAction() 
    {
        $em = $this->getDoctrine()->getManager();

        $latestTournament = $em->getRepository('AppBundle:Tournament')->findLatestTournament();
    
        $dateOfLatestTournament = $latestTournament->getDate();
        
        $tournamentRegistrations = $em->getRepository('AppBundle:TournamentRegistration')->findAllTournamentRegistrationsByDateTournament($dateOfLatestTournament);

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Tournois', $this->get('router')->generate('back_end_tournament_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:tournament_registration.html.twig', array(
            'tournamentRegistrations' => $tournamentRegistrations
        ));
    }
}
