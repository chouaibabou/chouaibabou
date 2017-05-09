<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $bag= $this->get('session')->getFlashbag();
        $bag->
        var_dump($bag->all()); die;
        return $this->render('FrontBundle:Default:index.html.twig');
    }
}
