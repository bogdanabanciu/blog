<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 7/26/2017
 * Time: 3:50 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
        public function contactAction(Request $request)
        {
            return $this->render('contact/contact.html.twig');
        }
}