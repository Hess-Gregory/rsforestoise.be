<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\User;
use AppBundle\Form\UserAddType;
use AppBundle\Form\UserEditType;

class UserController extends Controller
{
    /* FrontEnd */

    /* BackEnd */
    public function backEndUserDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAllUsersByRole('ROLE_ADMIN');

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Utilisateurs', $this->get('router')->generate('back_end_user_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:user_default.html.twig', array(
            'users' => $users
        ));
    }
    
    public function backEndUserAddAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $user->addRole('ROLE_ADMIN');
        $user->setEnabled(true);

        $form = $this->createForm(new UserAddType(), $user);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid()) 
            {
                $password = $form->getData()->getPassword(); // $_POST['password']
                $user->setPlainPassword($password);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$user->getUsername().'" a été ajouté');

                return $this->redirect($this->generateUrl('back_end_user_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Utilisateurs', $this->get('router')->generate('back_end_user_default'));
        $breadcrumbs->addItem('Ajouter un Utilisateur');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:user_add.html.twig', array(
          'form' => $form->createView()
        ));        
    }
    
    public function backEndUserEditAction(Request $request, $userId)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->find($userId);

        $form = $this->createForm(new UserEditType(), $user);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            { 
                $password = $form->getData()->getPassword(); // $_POST['password']
                $user->setPlainPassword($password);

                $em->persist($user);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$user->getUsername().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_user_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Utilisateurs', $this->get('router')->generate('back_end_user_default'));
        $breadcrumbs->addItem('Modifier un Utilisateur');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:user_edit.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }

    public function backEndUserDeleteAction($userId)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->find($userId);

        $em->remove($user);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', '"'.$user->getUsername().'" a été supprimé');

        return $this->redirect($this->generateUrl('back_end_user_default'));  
    }
}
