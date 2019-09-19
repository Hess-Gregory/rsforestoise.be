<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Registration;
use AppBundle\Entity\Player;
use AppBundle\Form\RegistrationAddType;
use AppBundle\Form\RegistrationEditType;

class RegistrationController extends Controller
{
    /* FrontEnd */
    public function frontEndRegistrationDefaultAction()
    {   
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $page = $em->getRepository('AppBundle:Page')->findOneByName('Inscription');

        $registration = new Registration;

        $form = $this->createForm(new RegistrationAddType(), $registration);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em->persist($registration);
                $em->flush();

                /* Send Email */

                $data = $form->getData();

                $mailer = $this->get('mailer');

                $message = \Swift_Message::newInstance()
                    ->setSubject('Inscription au Club RSForestoise')
                    ->setFrom($this->container->getParameter('mailer_address_from'))
                    ->setTo($data->getEmail())
                    ->setContentType('text/html')
                    ->setBody('
                        <!DOCTYPE html>
                        <html lang="fr">
                            <body>
                                <p>Merci pour votre inscription <b>'.$data->getName().' '.$data->getFirstName().'</b></p>
                                <p>Pour que nous puissions valider votre inscription, il vous reste à faire un virement de <b>300€</b> sur le compte IBAN <b>BE16 3631 3380 5274</b> avec la communication suivante : <b>Inscription '.$data->getName().' '.$data->getFirstName().'</b></p>
                            </body>
                        </html>
                    ');

                $mailer->send($message);

                /* End Send Email */

                /* Send Email */

                $mailer = $this->get('mailer');

                $message = \Swift_Message::newInstance()
                    ->setSubject('Nouvelle inscription au Club RSForestoise')
                    ->setFrom($this->container->getParameter('mailer_address_from'))
                    ->setTo($this->container->getParameter('mailer_address_to'))
                    ->setContentType('text/html')
                    ->setBody('
                        <!DOCTYPE html>
                        <html lang="fr">
                            <body>
                                <p><b>'.$data->getName().' '.$data->getFirstName().'</b> vient de soumettre une inscription.</p>
                                <p>Merci de contrôler et valider cette inscription.</p>
                            </body>
                        </html>
                    ');

                $mailer->send($message);

                /* End Send Email */

                $this->get('session')->getFlashBag()->add('info', 'Merci pour votre inscription '.$data->getName().' '.$data->getFirstName().'. Vous recevrez d\'ici peu un e-mail avec la marche à suivre pour finaliser votre inscription.');

                return $this->redirect($this->generateUrl('front_end_registration_default'));
            }
        }

        return $this->render('AppBundle:FrontEnd:registration_default.html.twig', array(
            'page' => $page,
            'form' => $form->createView()
        ));
    }

    /* BackEnd */
    public function backEndRegistrationDefaultAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registrations = $em->getRepository('AppBundle:Registration')->findAllRegistrationsEnabled();

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Inscriptions', $this->get('router')->generate('back_end_registration_default'));
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:registration_default.html.twig', array(
            'registrations' => $registrations
        ));
    }

    public function backEndRegistrationEditAction(Request $request, $registrationId)
    {
        $em = $this->getDoctrine()->getManager();

        $registration = $em->getRepository('AppBundle:Registration')->find($registrationId);

        $form = $this->createForm(new RegistrationEditType(), $registration);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $data = $form->getData();

                if ($data->getEnabled()) {
                    
                    $player = new Player;

                    $player->setName($data->getName())
                           ->setFirstName($data->getFirstName())
                           ->setDateBirth($data->getDateBirth())
                           ->setBirthplace($data->getBirthplace())
                           ->setStreet($data->getStreet())
                           ->setNumberStreet($data->getNumberStreet())
                           ->setMailbox($data->getMailbox())
                           ->setPostalCode($data->getPostalCode())
                           ->setCity($data->getCity())
                           ->setEmail($data->getEmail())
                           ->setPhone($data->getPhone())
                           ->setResponsiblePhone($data->getResponsiblePhone())
                           ->setDateArrival(new \DateTime());
                }

                $em->persist($player);
                $em->persist($registration);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', '"'.$registration->getName().'" a été modifié');

                return $this->redirect($this->generateUrl('back_end_registration_default'));
            }
        }

        // BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem('Inscriptions', $this->get('router')->generate('back_end_registration_default'));
        $breadcrumbs->addItem('Modifier une Inscription');
        // End BreadCrumbs

        return $this->render('AppBundle:BackEnd:registration_edit.html.twig', array(
            'form' => $form->createView(),
            'registration' => $registration
        ));
    }

}
