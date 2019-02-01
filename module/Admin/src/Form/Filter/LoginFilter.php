<?php

namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class LoginFilter extends InputFilter {

    public function __construct() {

        $isEmpty = \Zend\Validator\NotEmpty::IS_EMPTY;
        $invalidEmail = \Zend\Validator\EmailAddress::INVALID_FORMAT;

        $this->add([
            'name' => 'email',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'EmailAddress',
                    'options' => [
                        'messages' => [
                            $invalidEmail => 'Email is not valid.'
                        ]
                    ]
                ]
            ]
        ]);
        $this->add([
            'name' => 'password',
            'required' => true,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'NotEmpty',
                    'options' => [
                        'messages' => [
                            $isEmpty => 'Password can not be empty.'
                        ]
                    ]
                ]
            ]
        ]);
        $this->add([
            'name' => 'submit',
            'required' => false,
        ]);
    }

}
