<?php

/**
 * Created by PhpStorm.
 * User: CAB3682
 * Date: 05/05/2017
 * Time: 18:36
 */

namespace FrontBundle\Form\Handler;



use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class SheetHandler
{
    protected $form;
    protected  $request;

    public function __construct(Form $form, Request $request)
    {
        $this->form = $form;
        $this->request = $request;
    }

    public function process()
    {
        $this->form->handleRequest($this->request);

        if($this->request->isMethod('post')&& $this->form->isValid())
            return true;
        else
             return false;

    }

    public function getForm(){
        return $this->form;
    }

    protected function onSuccess()
    {

    }

}