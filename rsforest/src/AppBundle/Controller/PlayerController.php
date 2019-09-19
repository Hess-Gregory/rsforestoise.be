<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Player;
use AppBundle\Entity\Payment;
use AppBundle\Form\PlayerAddType;
use AppBundle\Form\PlayerEditType;
use AppBundle\Form\PaymentAddType;
use AppBundle\Form\PaymentEditType;

class PlayerController extends Controller
{
    /* FrontEnd */

    /* BackEnd */
    public function backEndPlayerDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $players = $em->getRepository('AppBundle:Player')->findAllPlayersByName();

        $nbTotalPlayers = count($players);

        $price = $em->getRepository('AppBundle:Price')->findPriceOfCurrentYear();

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_default.html.twig', array(
            'players' => $players,
            'nbTotalPlayers' => $nbTotalPlayers,
            'price' => $price
        ));
    }
    
    public function backEndPlayerAddAction(Request $request)
    {
        $player = new Player;

        $form = $this->createForm(new PlayerAddType(), $player);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($player);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$player->getName().'" a été ajouté');

                return $this->redirect($this->generateUrl('back_end_player_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Ajouter un Joueur');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_add.html.twig', array(
          'form' => $form->createView()
        ));        
    }
    
    public function backEndPlayerEditAction(Request $request, $playerId)
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $form = $this->createForm(new PlayerEditType(), $player);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {   
                $em->persist($player);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$player->getName().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_player_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Modifier un Joueur');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_edit.html.twig', array(
            'form' => $form->createView(),
            'player' => $player
        ));
    }

    public function backEndPlayerDeleteAction($playerId)
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $em->remove($player);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', '"'.$player->getName().'" a été supprimé');

        return $this->redirect($this->generateUrl('back_end_player_default'));  
    }

    public function backEndPlayerPictureAction($playerId) 
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $pictures = $em->getRepository('AppBundle:Picture')->findAllPicturesByPlayerId($playerId);

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Photos de "'.$player->getName().'"');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_picture.html.twig', array(
            'player' => $player,
            'pictures' => $pictures
        ));
    }

    public function backEndPlayerPictureSelectAction()
    {  
        $em = $this->getDoctrine()->getManager();

        $idPlayer = $this->getRequest()->query->get('idPlayer');
        $player = $em->getRepository('AppBundle:Player')->find($idPlayer);

        $idPicture = $this->getRequest()->query->get('idPicture');
        $picture = $em->getRepository('AppBundle:Picture')->find($idPicture);

        $player->setPicture($picture);
        $em->persist($player);
        $em->flush();

        return new JsonResponse(array('msg' => 'done'));
    }

    public function backEndPlayerPictureDeleteAction()
    {  
        $em = $this->getDoctrine()->getManager();

        $id = $this->getRequest()->query->get('id');

        $picture = $em->getRepository('AppBundle:Picture')->find($id);

        $oldFile = __DIR__.'/../../../web/media/uploads/'.$picture->getName();

        if (file_exists($oldFile)) {
            unlink($oldFile);
        }

        $em->remove($picture);

        $em->flush();

        return new JsonResponse(array('msg' => 'done'));
    }

    public function backEndPlayerPaymentAction($playerId) 
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $payments = $em->getRepository('AppBundle:Payment')->findAllPaymentsByPlayerId($playerId);

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Paiments de "'.$player->getName().'"');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_payment.html.twig', array(
            'player' => $player,
            'payments' => $payments
        ));
    }

    public function backEndPlayerPaymentAddAction(Request $request, $playerId)
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $payment = new Payment;

        $form = $this->createForm(new PaymentAddType(), $payment);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid()) 
            {
                $payment->setPlayer($player);

                $em->persist($payment);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('info', '"'.$payment->getAmount().'" a été ajouté');

                return $this->redirect($this->generateUrl('back_end_player_payment', array('playerId' => $playerId)));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Paiments de '.$player->getName(), $this->get('router')->generate('back_end_player_payment', array('playerId' => $playerId)));
        $breadcrumbs->addItem('Ajouter un Paiement');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_payment_add.html.twig', array(
          'form' => $form->createView(),
          'player' => $player
        ));        
    }
    
    public function backEndPlayerPaymentEditAction(Request $request, $playerId, $paymentId)
    {   
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $payment = $em->getRepository('AppBundle:Payment')->find($paymentId);

        $form = $this->createForm(new PaymentEditType(), $payment);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
            if ($form->isValid())
            {   
                $em->persist($payment);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$payment->getAmount().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_player_payment', array('playerId' => $playerId)));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Joueurs', $this->get('router')->generate('back_end_player_default'));
        $breadcrumbs->addItem('Paiments de '.$player->getName(), $this->get('router')->generate('back_end_player_payment', array('playerId' => $playerId)));
        $breadcrumbs->addItem('Modifier un paiement');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:player_payment_edit.html.twig', array(
            'form' => $form->createView(),
            'player' => $player,
            'payment' => $payment
        ));
    }

    public function backEndPlayerPaymentDeleteAction(Request $request, $playerId, $paymentId)
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AppBundle:Player')->find($playerId);

        $payment = $em->getRepository('AppBundle:Payment')->find($paymentId);

        $em->remove($payment);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', '"'.$payment->getAmount().'" a été supprimé');

        return $this->redirect($this->generateUrl('back_end_player_payment', array('playerId' => $playerId)));
    } 
}
