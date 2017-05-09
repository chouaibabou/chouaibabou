<?php
/**
 * Created by PhpStorm.
 * User: CAB3682
 * Date: 09/05/2017
 * Time: 20:13
 */

namespace FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    public function indexAction(Request $request)
    {
        var_dump($request); die;
        $bag= $this->get('session')->getFlashBag();
        $bag->set('login','vous etes bien connectés');
        return $this-> render('FrontBundle:Dashboard:index.html.twig');
    }

}