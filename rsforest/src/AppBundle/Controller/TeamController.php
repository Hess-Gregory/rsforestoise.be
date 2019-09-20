<?php



namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;



use AppBundle\Entity\Team;

use AppBundle\Entity\TeamStaff;

use AppBundle\Form\TeamAddType;

use AppBundle\Form\TeamEditType;

use AppBundle\Form\TeamStaffAddType;

use AppBundle\Form\TeamStaffEditType;



class TeamController extends Controller

{

    /* FrontEnd */

    public function frontEndTeamYoungDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Equipes - Jeunes');



        $teams = $em->getRepository('AppBundle:Team')->findAllTeamsYoungByName();



        return $this->render('AppBundle:FrontEnd:team_young_default.html.twig', array(

            'page' => $page,

            'teams' => $teams

        ));

    }



    public function frontEndTeamYoungDescriptionAction($slug)

    {

        $em = $this->getDoctrine()->getManager();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Equipes - Jeunes Description');



        $team = $em->getRepository('AppBundle:Team')->findOneBySlug($slug);



        $players = $em->getRepository('AppBundle:Player')->findAllPlayersByTeamId($team->getId());



        $teamStaffs = $em->getRepository('AppBundle:TeamStaff')->findAllTeamStaffsByTeamId($team->getId());



        return $this->render('AppBundle:FrontEnd:team_young_description.html.twig', array(

            'page' => $page,

            'team' => $team,

            'players' => $players,

            'teamStaffs' => $teamStaffs

        ));

    }



    public function frontEndTeamFirstDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Equipes - Première');



        $teams = $em->getRepository('AppBundle:Team')->findAllTeamsFirstByName();



        return $this->render('AppBundle:FrontEnd:team_first_default.html.twig', array(

            'page' => $page,

            'teams' => $teams

        ));

    }



    public function frontEndTeamFirstDescriptionAction($slug)

    {

        $em = $this->getDoctrine()->getManager();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Equipes - Première Description');



        $team = $em->getRepository('AppBundle:Team')->findOneBySlug($slug);



        $players = $em->getRepository('AppBundle:Player')->findAllPlayersByTeamId($team->getId());



        $teamStaffs = $em->getRepository('AppBundle:TeamStaff')->findAllTeamStaffsByTeamId($team->getId());

        

        return $this->render('AppBundle:FrontEnd:team_first_description.html.twig', array(

            'page' => $page,

            'team' => $team,

            'players' => $players,

            'teamStaffs' => $teamStaffs

        ));

    }



    /* BackEnd */

    public function backEndTeamDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $teams = $em->getRepository('AppBundle:Team')->findAllTeamsByName();



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_default.html.twig', array(

            'teams' => $teams

        ));

    }

    

    public function backEndTeamAddAction(Request $request)

    {

        $team = new Team;



        $form = $this->createForm(new TeamAddType(), $team);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid()) 

            {

                $em = $this->getDoctrine()->getManager();

                $em->persist($team);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$team->getName().'" a été ajouté');



                return $this->redirect($this->generateUrl('back_end_team_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Ajouter une Equipe');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_add.html.twig', array(

          'form' => $form->createView()

        ));        

    }

    

    public function backEndTeamEditAction(Request $request, $teamId)

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $form = $this->createForm(new TeamEditType(), $team);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid())

            {   

                $em->persist($team);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$team->getName().'" a été modifié');



                return $this->redirect($this->generateUrl('back_end_team_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Modifier une Equipe');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_edit.html.twig', array(

            'form' => $form->createView(),

            'team' => $team

        ));

    }



    public function backEndTeamDeleteAction($teamId)

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $em->remove($team);

        $em->flush();



        $this->get('session')->getFlashBag()->add('info', '"'.$team->getName().'" a été supprimé');



        return $this->redirect($this->generateUrl('back_end_team_default'));  

    }



    public function backEndTeamPictureAction($teamId) 

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $pictures = $em->getRepository('AppBundle:Picture')->findAllPicturesByTeamId($teamId);



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Photos de "'.$team->getName().'"');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_picture.html.twig', array(

            'team' => $team,

            'pictures' => $pictures

        ));





    }



    public function backEndTeamPictureSelectAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $idTeam = $this->getRequest()->query->get('idTeam');

        $team = $em->getRepository('AppBundle:Team')->find($idTeam);



        $idPicture = $this->getRequest()->query->get('idPicture');

        $picture = $em->getRepository('AppBundle:Picture')->find($idPicture);



        $team->setPicture($picture);

        $em->persist($team);

        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



    public function backEndTeamPictureDeleteAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $id = $this->getRequest()->query->get('id');



        $picture = $em->getRepository('AppBundle:Picture')->find($id);



        $oldFile = __DIR__.'/../../../public_html/media/uploads/'.$picture->getName();



        if (file_exists($oldFile)) {

            unlink($oldFile);

        }



        $em->remove($picture);



        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



    public function backEndTeamStaffAction($teamId) 

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $teamStaffs = $em->getRepository('AppBundle:TeamStaff')->findAllTeamStaffsByTeamId($teamId);



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Staff de "'.$team->getName().'"');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_staff.html.twig', array(

            'team' => $team,

            'teamStaffs' => $teamStaffs

        ));

    }



    public function backEndTeamStaffAddAction(Request $request, $teamId)

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $teamStaff = new TeamStaff;



        $form = $this->createForm(new TeamStaffAddType(), $teamStaff);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid()) 

            {

                $teamStaff->setTeam($team);



                $em->persist($teamStaff);

                $em->flush();

                

                $this->get('session')->getFlashBag()->add('info', '"'.$teamStaff->getName().'" a été ajouté');



                return $this->redirect($this->generateUrl('back_end_team_staff', array('teamId' => $teamId)));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Staff de '.$team->getName(), $this->get('router')->generate('back_end_team_staff', array('teamId' => $teamId)));

        $breadcrumbs->addItem('Ajouter un membre au Staff');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_staff_add.html.twig', array(

          'form' => $form->createView(),

          'team' => $team

        ));        

    }

    

    public function backEndTeamStaffEditAction(Request $request, $teamId, $teamStaffId)

    {   

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $teamStaff = $em->getRepository('AppBundle:TeamStaff')->find($teamStaffId);



        $form = $this->createForm(new TeamStaffEditType(), $teamStaff);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);

            

            if ($form->isValid())

            {   

                $em->persist($teamStaff);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$teamStaff->getName().'" a été modifié');



                return $this->redirect($this->generateUrl('back_end_team_staff', array('teamId' => $teamId)));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Staff de '.$team->getName(), $this->get('router')->generate('back_end_team_staff', array('teamId' => $teamId)));

        $breadcrumbs->addItem('Modifier un membre du staff');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_staff_edit.html.twig', array(

            'form' => $form->createView(),

            'team' => $team,

            'teamStaff' => $teamStaff

        ));

    }



    public function backEndTeamStaffDeleteAction(Request $request, $teamId, $teamStaffId)

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $teamStaff = $em->getRepository('AppBundle:TeamStaff')->find($teamStaffId);



        $em->remove($teamStaff);

        $em->flush();



        $this->get('session')->getFlashBag()->add('info', '"'.$teamStaff->getName().'" a été supprimé');



        return $this->redirect($this->generateUrl('back_end_team_staff', array('teamId' => $teamId)));

    }



    public function backEndTeamStaffPictureAction($teamId, $teamStaffId) 

    {

        $em = $this->getDoctrine()->getManager();



        $team = $em->getRepository('AppBundle:Team')->find($teamId);



        $teamStaff = $em->getRepository('AppBundle:TeamStaff')->find($teamStaffId);



        $pictures = $em->getRepository('AppBundle:Picture')->findAllPicturesByTeamStaffId($teamStaffId);



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Equipes', $this->get('router')->generate('back_end_team_default'));

        $breadcrumbs->addItem('Staff de '.$team->getName(), $this->get('router')->generate('back_end_team_staff', array('teamId' => $teamId)));

        $breadcrumbs->addItem('Photos de '.$teamStaff->getName());

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:team_staff_picture.html.twig', array(

            'teamStaff' => $teamStaff,

            'pictures' => $pictures

        ));

    }



    public function backEndTeamStaffPictureSelectAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $idTeamStaff = $this->getRequest()->query->get('idTeamStaff');

        $teamStaff = $em->getRepository('AppBundle:TeamStaff')->find($idTeamStaff);



        $idPicture = $this->getRequest()->query->get('idPicture');

        $picture = $em->getRepository('AppBundle:Picture')->find($idPicture);



        $teamStaff->setPicture($picture);

        $em->persist($teamStaff);

        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



    public function backEndTeamStaffPictureDeleteAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $id = $this->getRequest()->query->get('id');



        $picture = $em->getRepository('AppBundle:Picture')->find($id);



        $oldFile = __DIR__.'/../../../public_html/media/uploads/'.$picture->getName();



        if (file_exists($oldFile)) {

            unlink($oldFile);

        }



        $em->remove($picture);



        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }

}

