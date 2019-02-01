<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;
use Zend\Authentication\AuthenticationService;
use Zend\EventManager\EventManagerInterface;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;

class DashboardController extends AbstractActionController {

    protected $auth;
    private $entityManager;
    private $connection;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager, $connection) {
        $this->entityManager = $entityManager;
        $this->connection = $connection;
        $this->auth = new AuthenticationService();
    }

    public function onDispatch(MvcEvent $e) {
        # Get user identity
        $this->auth = new AuthenticationService();
        if (!$this->auth->hasIdentity()) {
            $this->redirect()->toRoute('appLogin');
        }
        return parent::onDispatch($e);
    }

    public function setEventManager(EventManagerInterface $events) {

        parent::setEventManager($events);
    }

    /**
     * Dashboard
     */
    public function indexAction() {

        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');

        return new ViewModel();
    }

}
