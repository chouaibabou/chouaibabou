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
//        $rootPath = $this->get('router')->generate('test_front_homepage',array(), true);
//        var_dump($request->server->['HTTP_REFERER']); die;
       /* var_dump($request); die;*/
        $bag= $this->get('session')->getFlashBag();
        $bag->set('login','vous etes bien connectés');
        return $this-> render('FrontBundle:Dashboard:index.html.twig');
    }

}