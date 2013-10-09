<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $information_subform = new Zend_Form_SubForm();
        $fullname = $information_subform->createElement('text', 'usuario');
        $fullname->setRequired(true)
                 ->setLabel('usuario')
                 ->setAttrib('class', 'focus user')
                 ->addFilter('StringTrim')
                 ->addValidator('StringLength', false, array(0, 30));
        $information_subform->addElement($fullname);

        $password_subform = new Zend_Form_SubForm();

        $password1 = $password_subform->createElement('password', 'password1');
        $password1->setRequired(true)
                  ->setLabel('Password')
                  ->setAttrib('class', 'key')
                  ->addValidator('StringLength', false, array(6, 20));

        $password_subform->addElement($password1);

        $this->addSubForms(array(
            'information' => $information_subform,
            'password' => $password_subform,
        ));
        $this->addElement('submit', 'submit', array('ignore' => true, 'label' => 'Create'));
    }

}

