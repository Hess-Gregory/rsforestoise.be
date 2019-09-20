<?php



namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;



use AppBundle\Entity\Committee;

use AppBundle\Form\CommitteeAddType;

use AppBundle\Form\CommitteeEditType;



class CommitteeController extends Controller

{

    /* FrontEnd */

    public function frontEndCommitteeDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Comité du Club');



        $committees = $em->getRepository('AppBundle:Committee')->findAllCommitteesByOrder();



        return $this->render('AppBundle:FrontEnd:committee_default.html.twig', array(

            'page' => $page,

            'committees' => $committees

        ));

    }



    /* BackEnd */

    public function backEndCommitteeDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $committees = $em->getRepository('AppBundle:Committee')->findAllCommitteesByOrder();



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Comité du Club', $this->get('router')->generate('back_end_committee_default'));

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:committee_default.html.twig', array(

            'committees' => $committees

        ));

    }

    

    public function backEndCommitteeAddAction(Request $request)

    {

        $committee = new Committee;



        $form = $this->createForm(new CommitteeAddType(), $committee);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid()) 

            {

                $em = $this->getDoctrine()->getManager();

                $em->persist($committee);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$committee->getName().'" a été ajouté');



                return $this->redirect($this->generateUrl('back_end_committee_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Comité du Club', $this->get('router')->generate('back_end_committee_default'));

        $breadcrumbs->addItem('Ajouter un membre au Comité du Club');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:committee_add.html.twig', array(

          'form' => $form->createView()

        ));        

    }

    

    public function backEndCommitteeEditAction(Request $request, $committeeId)

    {

        $em = $this->getDoctrine()->getManager();



        $committee = $em->getRepository('AppBundle:Committee')->find($committeeId);



        $form = $this->createForm(new CommitteeEditType(), $committee);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid())

            {   

                $em->persist($committee);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$committee->getName().'" a été modifié');



                return $this->redirect($this->generateUrl('back_end_committee_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Comité du Club', $this->get('router')->generate('back_end_committee_default'));

        $breadcrumbs->addItem('Modifier un membre du Comité du Club');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:committee_edit.html.twig', array(

            'form' => $form->createView(),

            'committee' => $committee

        ));

    }



    public function backEndCommitteeDeleteAction($committeeId)

    {

        $em = $this->getDoctrine()->getManager();



        $committee = $em->getRepository('AppBundle:Committee')->find($committeeId);



        $em->remove($committee);

        $em->flush();



        $this->get('session')->getFlashBag()->add('info', '"'.$committee->getName().'" a été supprimé');



        return $this->redirect($this->generateUrl('back_end_committee_default'));  

    }





    public function backEndCommitteePictureAction($committeeId) 

    {

        $em = $this->getDoctrine()->getManager();



        $committee = $em->getRepository('AppBundle:Committee')->find($committeeId);



        $pictures = $em->getRepository('AppBundle:Picture')->findAllPicturesByCommitteeId($committeeId);



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Comité du Club', $this->get('router')->generate('back_end_committee_default'));

        $breadcrumbs->addItem('Photos de "'.$committee->getName().'"');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:committee_picture.html.twig', array(

            'committee' => $committee,

            'pictures' => $pictures

        ));





    }



    public function backEndCommitteePictureSelectAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $idCommittee = $this->getRequest()->query->get('idCommittee');

        $committee = $em->getRepository('AppBundle:Committee')->find($idCommittee);



        $idPicture = $this->getRequest()->query->get('idPicture');

        $picture = $em->getRepository('AppBundle:Picture')->find($idPicture);



        $committee->setPicture($picture);

        $em->persist($committee);

        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



    public function backEndCommitteePictureDeleteAction()

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

