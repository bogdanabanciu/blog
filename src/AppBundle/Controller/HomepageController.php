<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 7/25/2017
 * Time: 1:57 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomepageController extends Controller
{
    public function homepageAction(Request $request)
    {
        return $this->render('homepage/homepage.html.twig');
    }
}
