<?php

namespace Admin\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class UserForm extends Form {

    public function __construct($name = null) {
        parent::__construct('user-form');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'type' => 'Zend\Form\Element\Hidden',
            'name' => 'id',
            'attributes' => array(
                'value' => 0
            )
        ));
        $this->add(array(
            'name' => 'fname',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control',
                'maxlength'=>100
            ),
            'options' => array(
                'label' => 'First Name',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        $this->add(array(
            'name' => 'lname',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control',
                'maxlength'=>100
            ),
            'options' => array(
                'label' => 'Last Name',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));        
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
            'name' => 'mobile_no',
            'attributes' => array(
                'type' => 'number',
                'class' => 'form-control',
                'maxlength'=>11
            ),
            'options' => array(
                'label' => 'Mobile No.',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        $this->add(array(
            'name' => 'address_line_1',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control',
                'maxlength'=>150
            ),
            'options' => array(
                'label' => 'Address line 1',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        $this->add(array(
            'name' => 'address_line_2',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control',
                'maxlength'=>150
            ),
            'options' => array(
                'label' => 'Address line 2',
                'label_attributes' => array(
                    'class' => 'control-label',
                ),
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'status',
            'options' => array(
                'label' => 'Status',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0'
            )
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Create',
                'class' => 'btn btn-lg btn-success'
            ),
        ));
        $this->add(array(
            'name' => 'cancel',
            'attributes' => array(
                'type' => 'button',
                'value' => 'Cancel',
                'class' => 'btn btn-lg btn-warning'
            ),
        ));
    }
}
