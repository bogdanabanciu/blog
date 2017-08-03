<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 8/3/2017
 * Time: 3:01 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    public function testAction(Request $request)
    {
        return $this->render('/test.html.twig', array(
            'header' => 'bla bla'
        ));
    }
}