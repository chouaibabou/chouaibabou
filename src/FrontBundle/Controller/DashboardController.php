<?php
/**
 * Created by PhpStorm.
 * User: CAB3682
 * Date: 09/05/2017
 * Time: 20:13
 */

namespace FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this-> render('FrontBundle:Dashboard:index.html.twig');
    }

}