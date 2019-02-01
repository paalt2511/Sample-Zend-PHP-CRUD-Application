# CRUD Application-Zend V3

## Introduction

This is a skeleton application using the Zend Framework latest v3 MVC layer and module
systems.  It usages ORM Doctrin. It has two modules.
 - Admin (Custom)
 - Application (Default)

 ## Require Softwares
  - PHP >= 7.x.x
  - Mysql MariaDB > 5.5.x
  - Apache V-2 (LAMP-Linux / XAMP-Windows)
  - Should be URL rewrite mod ON
  - composer [https://getcomposer.org/]

## Setup Appliction
  - Put source code into apache work-station like:
       - Linux, /var/www/html/zend-app
       - Windows, C:\xampp\htdocs\zend-app
  - Create a daatabase via phpmyadmin/mysql terminal
  - Configure database credintial into codes;
      - 1. C:\xampp\htdocs\zend-app\config\autoload\doctrine.local.php
      ```
      return array(
        'doctrine' => array(
            'connection' => array(
                'orm_default' => array(
                    'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                    'params' => array(
                        'host'     => 'localhost',
                        'port'     => '3306',
                        'user'     => 'root',
                        'password' => '',
                        'dbname'   => 'zend-app',
                    )))));
        ``` 
        - 2. C:\xampp\htdocs\zend-app\config\autoload\local.php
        ```
        return [
            'doctrine' => [
                'connection' => [
                    'orm_default' => [
                        'driverClass' => PDOMySqlDriver::class,
                        'params' => [
                            'host'     => 'localhost',                    
                            'user'     => 'root',
                            'password' => '',
                            'dbname'   => 'zend-app',
                        ]
                    ],            
                ],        
            ],
            'service_manager' =>[
                'factories' => [
                    'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
                ],
            ],
        ];
      ```
   - After success full db connection, Run Migration command
       Open terminal and go to this location for windows C:\xampp\htdocs\zend-app\vendor\bin> while for Linux /var/www/html/zend-app/vendor/bin$
       ```
         doctrine-module migrations:migrate

       ```
    - If you unable run migration then just import 'zend-app.sql' whis is exists into root directiory.
    
## How to run?
  - if all steps have been done then;
    We have two URL
     1. http://localhost/zend-app -- Default
     2. http://localhost/zend-app/admin -- Custom
          - If you are able to access both url then for 2nd, need to login. So, I have already create 4 users that you can use.
             Email: steve.green@deerfoot.co.uk
             pass:   123456
         - After logging successfully, you can see CRUD operation by clicking Users link left nav.

    3. **If you are unable to .htaccess url rewrite then just use for both.**
         - http://localhost/zend-app/public
         - http://localhost/zend-app/public/admin

**Note**
  - Right now, password is not encrypted. I left this section because password recovery section is not implemented.
