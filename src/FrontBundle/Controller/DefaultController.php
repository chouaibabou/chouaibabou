<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    public function registerAction()
    {
        return $this->render('FrontBundle:Default:register.html.twig');
    }

    public function redirectToDashboardAction()
    {
        return new RedirectResponse($this->get('router')->generate('front_dashboard'));
    }
}
