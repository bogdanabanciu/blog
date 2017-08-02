<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 7/26/2017
 * Time: 3:50 PM
 */

namespace AppBundle\Controller;


use AppBundle\Forms\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
        public function contactAction(Request $request)
        {
            $contactForm = $this->createForm(ContactFormType::class);

            /*if($request->get($contactForm->getName()))
            {
                $contactForm->handleRequest($request);

                if($contactForm->isSubmitted() && $contactForm->isValid())
                {
                    $contactMessage = $contactForm->getData();
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($contactMessage);
                    $em->flush();

                    $this->addFlash('success', "Thank you for reaching out! You will hear from me soon!");
                }
            }*/

            return $this->render('contact/contact.html.twig', [
                'contactForm' => $contactForm->createView()
            ]);
        }
}