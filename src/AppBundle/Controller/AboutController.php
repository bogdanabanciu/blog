<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 8/2/2017
 * Time: 12:47 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    public function aboutAction(Request $request)
    {
        return $this->render('about-me/about.html.twig');
    }
}