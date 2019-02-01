<?php

namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class UserFormFilter extends InputFilter {

    public function __construct() {

        $isEmpty = \Zend\Validator\NotEmpty::IS_EMPTY;
        $invalidEmail = \Zend\Validator\EmailAddress::INVALID_FORMAT;

        $this->add([
            'name' => 'fname',
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
                            $isEmpty => 'First name can not be empty.'
                        ]
                    ]
                ]
            ]
        ]);
        $this->add([
            'name' => 'lname',
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
                            $isEmpty => 'Last name can not be empty.'
                        ]
                    ]
                ]
            ]
        ]);
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
            'name' => 'mobile_no',
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
                            $isEmpty => 'Mobile Number can not be empty.'
                        ]
                    ]
                ]
            ]
        ]);
        $this->add([
            'name' => 'address_line_1',
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
                            $isEmpty => 'Address line 1 can not be empty.'
                        ]
                    ]
                ]
            ]
        ]);
        $this->add([
            'name' => 'address_line_2',
            'required' => false,
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);
        $this->add([
            'name' => 'submit',
            'required' => false,
        ]);
    }

}
