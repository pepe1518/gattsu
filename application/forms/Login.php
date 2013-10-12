<?php

class Application_Form_Login extends Zend_Form
{
    public function init()
    {
    	$this->setMethod('post');
    	
    	$nombre = $this->createElement('text', 'username');
    	$nombre->setRequired(true)
    		  ->setLabel('Usuario')
    		  ->setAttrib('class', 'focus user')
    		  ->addFilter('StringTrim')
    		  ->addValidator('StringLength', false, array(0, 128));
    	
    	$password = $this->createElement('password', 'password');
    	$password->setRequired(true)
	    	     ->setLabel('Password')
	    		 ->setAttrib('class', 'key');
    	
    	$this->addElement($nombre);
    	$this->addElement($password);
    	$this->addElement('submit', 'submit', array('ignore' => true, 'label' => 'Ingresar'));
    }

}

