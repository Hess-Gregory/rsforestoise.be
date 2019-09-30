<?php



namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;



use AppBundle\Entity\Actuality;

use AppBundle\Form\ActualityAddType;

use AppBundle\Form\ActualityEditType;

use AppBundle\Form\ActualitySearchType;



class ActualityController extends Controller

{

    /* FrontEnd */

    public function frontEndActualityDefaultAction($slug)

    {

        $em = $this->getDoctrine()->getManager();



        $latestActuality = $em->getRepository('AppBundle:Actuality')->findOneBySlug($slug);



        $actualities = $em->getRepository('AppBundle:Actuality')->findAllOrderByDate();



        $page = $em->getRepository('AppBundle:Page')->findOneByName('Actualités');



        return $this->render('AppBundle:FrontEnd:actuality_default.html.twig', array(

            'latestActuality' => $latestActuality,

            'actualities' => $actualities,

            'page' => $page

        ));

    }



    public function frontEndActualitySearchAction()

    {

        $request = $this->getRequest();



        if($request->isXmlHttpRequest())

        {

            $keyword = $request->request->get('keyword');



            $em = $this->getDoctrine()->getManager();



            if ($keyword != '')

            {

                $qb = $em->createQueryBuilder();



                $qb->select('a')

                   ->from('AppBundle:Actuality', 'a')

                   ->where("a.name LIKE :keyword")

                   ->orderBy('a.name', 'ASC')

                   ->setParameter('keyword', '%'.$keyword.'%');

             

                $searchResultActualités = $qb->getQuery()->getArrayResult();

            }

            

            // if any result

            if (empty($searchResultActualités)) {

                $searchResultActualités = array(

                    0 => array('name' => '')

                );

            }



            $response = new JsonResponse();

            $response->setData($searchResultActualités);



            return $response;

        }

    }



    /* FrontEnd - Render */

    public function renderGetSlugActualityAction()

    {

        $em = $this->getDoctrine()->getManager();



        $findLatestActualityID = $em->getRepository('AppBundle:Actuality')->findLatestActualityID();



        return $this->render('AppBundle:FrontEnd:include_get_slug_actuality.html.twig', array(

            'findLatestActualityID' => $findLatestActualityID

        ));

    }



    /* BackEnd */

    public function backEndActualityDefaultAction()

    {

        $em = $this->getDoctrine()->getManager();



        $actualities = $em->getRepository('AppBundle:Actuality')->findAllOrderByDate();



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Actualités', $this->get('router')->generate('back_end_actuality_default'));

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:actuality_default.html.twig', array(

            'actualities' => $actualities

        ));

    }

    

    public function backEndActualityAddAction(Request $request)

    {

        $actuality = new Actuality;



        $form = $this->createForm(new ActualityAddType(), $actuality);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid()) 

            {

                $em = $this->getDoctrine()->getManager();

                $em->persist($actuality);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$actuality->getName().'" a été ajouté');



                return $this->redirect($this->generateUrl('back_end_actuality_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Actualités', $this->get('router')->generate('back_end_actuality_default'));

        $breadcrumbs->addItem('Ajouter une Actualité');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:actuality_add.html.twig', array(

          'form' => $form->createView()

        ));        

    }

    

    public function backEndActualityEditAction(Request $request, $actualityId)

    {

        $em = $this->getDoctrine()->getManager();



        $actuality = $em->getRepository('AppBundle:Actuality')->find($actualityId);



        $form = $this->createForm(new ActualityEditType(), $actuality);



        if ($request->isMethod('POST'))

        {

            $form->handleRequest($request);



            if ($form->isValid())

            {   

                $actuality->setUpdatedAt(new \DateTime());

                $em->persist($actuality);

                $em->flush();



                $this->get('session')->getFlashBag()->add('info', '"'.$actuality->getName().'" a été modifié');



                return $this->redirect($this->generateUrl('back_end_actuality_default'));

            }

        }



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Actualités', $this->get('router')->generate('back_end_actuality_default'));

        $breadcrumbs->addItem('Modifier une Actualité');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:actuality_edit.html.twig', array(

            'form' => $form->createView(),

            'actuality' => $actuality

        ));

    }



    public function backEndActualityDeleteAction($actualityId)

    {

        $em = $this->getDoctrine()->getManager();



        $actuality = $em->getRepository('AppBundle:Actuality')->find($actualityId);



        $em->remove($actuality);

        $em->flush();



        $this->get('session')->getFlashBag()->add('info', '"'.$actuality->getName().'" a été supprimé');



        return $this->redirect($this->generateUrl('back_end_actuality_default'));  

    }





    public function backEndActualityPictureAction($actualityId) 

    {

        $em = $this->getDoctrine()->getManager();



        $actuality = $em->getRepository('AppBundle:Actuality')->find($actualityId);



        $pictures = $em->getRepository('AppBundle:Picture')->findAllPicturesByActualityId($actualityId);



        // BreadCrumbs

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $breadcrumbs->addItem('Actualités', $this->get('router')->generate('back_end_actuality_default'));

        $breadcrumbs->addItem('Photos de "'.$actuality->getName().'"');

        // End BreadCrumbs



        return $this->render('AppBundle:BackEnd:actuality_picture.html.twig', array(

            'actuality' => $actuality,

            'pictures' => $pictures

        ));



    }



    public function backEndActualityPictureSelectAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $idActuality = $this->getRequest()->query->get('idActuality');

        $actuality = $em->getRepository('AppBundle:Actuality')->find($idActuality);



        $idPicture = $this->getRequest()->query->get('idPicture');

        $picture = $em->getRepository('AppBundle:Picture')->find($idPicture);



        $actuality->setPicture($picture);

        $em->persist($actuality);

        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



    public function backEndActualityPictureDeleteAction()

    {  

        $em = $this->getDoctrine()->getManager();



        $id = $this->getRequest()->query->get('id');



        $picture = $em->getRepository('AppBundle:Picture')->find($id);



        $oldFile = __DIR__.'/../../../../../media/uploads/'.$picture->getName();



        if (file_exists($oldFile)) {

            unlink($oldFile);

        }



        $em->remove($picture);



        $em->flush();



        return new JsonResponse(array('msg' => 'done'));

    }



}

