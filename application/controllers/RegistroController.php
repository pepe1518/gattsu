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
        $form = new Application_Form_Administrador();
        $this->view->form = $form;
    }

    public function comiteAction()
    {
        $form = new Application_Form_Comite();
        $this->view->form = $form;
    }

    public function olimpistaAction()
    {
        $form = new Application_Form_Olimpista();
        $this->view->form = $form;
        
        
        
    }
}
