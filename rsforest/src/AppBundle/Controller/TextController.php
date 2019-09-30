<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Text;
use AppBundle\Form\TextEditType;

class TextController extends Controller
{
	/* FrontEnd */  

    /* BackEnd */
    public function backEndTextDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('AppBundle:Page')->findAll();

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Textes', $this->get('router')->generate('back_end_text_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:text_default.html.twig', array(
            'pages' => $pages
        ));
    }
    
    public function backEndTextEditAction(Request $request, $textId)
    {
        $em = $this->getDoctrine()->getManager();

        $text = $em->getRepository('AppBundle:Text')->find($textId);

        $form = $this->createForm(new TextEditType(), $text);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em->persist($text);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$text->getPage()->getName().' - '.$text->getNumber().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_text_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Textes', $this->get('router')->generate('back_end_text_default'));
        $breadcrumbs->addItem('Modifier Texte');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:text_edit.html.twig', array(
            'form' => $form->createView(),
            'text' => $text
        ));
    }

 
}
