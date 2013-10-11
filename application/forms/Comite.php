<?php

class Application_Form_Comite extends Zend_Form
{

    public function init() {
        $this->setMethod('post');
        
        $nombre = $this->createElement('text', 'nombreOlimpista');
        $nombre->setRequired(true)
        	   ->setLabel('Nombre')
        	   ->addValidator('alum')
        	   ->addValidator('StringLength', false, array(0, 20))
        	   ->addFilter('StringTrim');
        
        $apellido = $this->createElement('text', 'apellidoOlimpista');
        $apellido->setRequired(true)
        	  	 ->setLabel('Apellido')
        	   	 ->addValidator('alum')
        	   	 ->addValidator('StringLength', false, array(0, 20))
        	   	 ->addFilter('StringTrim');
        
        $email = $this->createElement('text', 'email');
        $email->setRequired(true)
        	  ->setLabel('Correo Electronico')
        	  ->setAttrib('class', 'user')
        	  ->addFilter('StringTrim')
		      ->addFilter('StringToLower')
	          ->addValidator('StringLength', false, array(4, 128))
        	  ->addValidator('Alnum', false, array('allowWhiteSpace' => false));
        

        $username = $this->createElement('text', 'userame');
        $username->setRequired(true)
                 ->setLabel('Username')
                 ->setAttrib('class', 'user')
                 ->addFilter('StringTrim')
                 ->addFilter('StringToLower')
                 ->addValidator('StringLength', false, array(4, 128))
                 ->addValidator('Alnum', false, array('allowWhiteSpace' => false));
                
        $password1 = $this->createElement('password', 'password1');
        $password1->setRequired(true)
                  ->setLabel('Password')
                  ->setAttrib('class', 'key')
                  ->addValidator('StringLength', false, array(6, 20));

        $password2 = $this->createElement('password', 'password');
        $password2->setRequired(true)
                  ->setLabel('Re-escribe tu password')
                  ->setAttrib('class', 'key')
                  ->addValidator('Identical', false, array('token' => 'password1'));

        $captchaElement = new Zend_Form_Element_Captcha ('signup',
        												  array('captcha' => array('captcha' => 'FigLet',
        																		   'wordLen' => 5,
        																		   'timeout' => 600)));
        $captchaElement->setLabel('porfavor completa');
        $this->addElement($nombre);
        $this->addElement($apellido);
        $this->addElement($email);
        $this->addElement($username);
        $this->addElement($password1);
        $this->addElement($password2);
        $this->addElement($captchaElement);
        $this->addElement('submit', 'submit', array('ignore' => true, 'label' => 'registrar'));

    }

}

