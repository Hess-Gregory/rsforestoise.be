<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends Controller
{
    /* FrontEnd */
    public function frontEndHomepageDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $page = $em->getRepository('AppBundle:Page')->findOneByName('Accueil');
        
        return $this->render('AppBundle:FrontEnd:homepage_default.html.twig', array(
            'page' => $page
        ));
    }

}
