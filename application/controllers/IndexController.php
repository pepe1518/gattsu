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
        //$this->view->tipo = '';
        $this->render();      
       
    }

    public function administradorAction()
    {
        $this->view->nombre = "aministrador";
    	$form = new Application_Form_Login();
        $this->view->form = $form;
		
    }

    public function comiteAction()
    {
    	$this->view->nombre = "comite";
        $form = new Application_Form_Login();
        $this->view->form = $form;
    }

    public function olimpistaAction()
    {
        $this->view->nombre = "olimpista";
    	$form = new Application_Form_Login();
        $this->view->form = $form;  
    }


}







