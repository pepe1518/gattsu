<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
       $this->initView();
       $this->view->baseUrl= $this->_request->getBaseUrl();
    }

    public function indexAction()
    {
        
        $this->view->title = "inicio";
        $this->view->tipo = '';
        $this->render();      
       
    }

    public function administradorAction()
    {
        $form = new Application_Form_Login();
        $this->view->form = $form;
    }

    public function comiteAction()
    {
        $form = new Application_Form_Login();
        $this->view->form = $form;
    }

    public function olimpistaAction()
    {
        $form = new Application_Form_Login();
        $this->view->form = $form;  
    }


}







