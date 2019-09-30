<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\SEO;
use AppBundle\Form\SEOEditType;

class SEOController extends Controller
{
	/* FrontEnd */  

    /* BackEnd */
    public function backEndSEODefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('AppBundle:Page')->findAllPagesNotNull();

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Référencement', $this->get('router')->generate('back_end_seo_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:seo_default.html.twig', array(
            'pages' => $pages
        ));
    }
    
    public function backEndSEOEditAction(Request $request, $seoId)
    {
        $em = $this->getDoctrine()->getManager();

        $seo = $em->getRepository('AppBundle:SEO')->find($seoId);

        $form = $this->createForm(new SEOEditType(), $seo);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em->persist($seo);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$seo->getTitle().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_seo_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Référencement', $this->get('router')->generate('back_end_seo_default'));
        $breadcrumbs->addItem('Modifier Référencement');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:seo_edit.html.twig', array(
            'form' => $form->createView(),
            'seo' => $seo
        ));
    }

 
}
