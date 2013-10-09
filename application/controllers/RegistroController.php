<?php

class RegistroController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function administradorAction()
    {
        // action body
    }

    public function comiteAction()
    {
        // action body
    }

    public function olimpistaAction()
    {
        $form = new Application_Form_Olimpista();
        $this->view->form = $form;
        
        
        
    }
}
