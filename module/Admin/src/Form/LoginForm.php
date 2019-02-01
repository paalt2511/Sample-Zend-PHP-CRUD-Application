<?php

namespace Admin\Form;

use Zend\Form\Element;
use Zend\Form\Form;

//use Zend\Form\Element\Select;
class LoginForm extends Form {

    public function __construct($name = null) {
        parent::__construct('login');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control',
                'maxlength'=>150
            ),
            'options' => array(
                'label' => 'Email',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type' => 'password',
                'class' => 'form-control',
                'maxlength'=>150
            ),
            'options' => array(
                'label' => 'Password',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Login',
                'class' => 'btn btn-lg btn-success btn-block'
            ),
        ));
    }

}
