<?php
/**
 * Created by PhpStorm.
 * User: CAB3682
 * Date: 02/05/2017
 * Time: 16:27
 */
namespace FrontBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use FrontBundle\Entity\Sheet;
use FrontBundle\Form\Handler\SheetHandler;
use FrontBundle\Form\Type\SheetType;
use function PHPSTORM_META\type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;

class SheetController extends Controller
{
    public function sheetListAction(Request $request)
    {
        return $this->render('FrontBundle:Sheet:sheetList.html.twig');
    }

    public function sheetAction($id, Request $request)
    {
        dump("2");
        return $this->render('FrontBundle:Sheet:sheet.html.twig', array('id'=>$id));
    }

    public function sheetBaseAction($id2, Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('FrontBundle:Sheet');
        $sheet1 = $repository-> find($id2);
        if(!$sheet1){
            throw new EntityNotFoundException();
        }
        dump("3");
        return $this->render('FrontBundle:Sheet:sheetBase.html.twig', array('sheet' => $sheet1));
    }

    public function sheetDoctrineAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FrontBundle:Sheet');

        $sheets = $repository->getAll();

        $session = $this->get('session');
        $session->set('machin','plop');
        $session->getFlashBag()->add('machin','truc');
        return $this->render('FrontBundle:Sheet:sheetDoctrine.html.twig',array('sheets'=>$sheets));
    }

    public function createAction(Request $request)
    {
        $SheetEntity=new Sheet();
        $formHandler =new SheetHandler($this->createForm( SheetType::class, $SheetEntity), $request);

        if($formHandler->process()){
            $em = $this->getDoctrine()->getManager();
            $em-> persist($formHandler->getForm()->getData());
            $em->flush();

            return $this->redirect($this->generateUrl('front_sheet_list'));
        }
        return $this->render('FrontBundle:Sheet:create.html.twig', array('form'=> $formHandler->getForm()->createView()));
    }
}
