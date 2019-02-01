<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;
use Zend\Authentication\AuthenticationService;
use Zend\EventManager\EventManagerInterface;
use Admin\Form\LoginForm;
use Admin\Form\Filter\LoginFilter;
use Admin\Model\UserModel;
use Zend\Session\Container;

class IndexController extends AbstractActionController {

    protected $auth;
    protected $error;
    protected $objModel;
    private $entityManager;
    private $connection;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager, $connection) {
        $this->entityManager = $entityManager;
        $this->connection = $connection;
    }

    public function onDispatch(MvcEvent $e) {
        # Get user identity
        $this->auth = new AuthenticationService();
        if (!$this->auth->hasIdentity()) {
            // $this->redirect()->toRoute('appLogin');
        }
        return parent::onDispatch($e);
    }

    public function setEventManager(EventManagerInterface $events) {
        parent::setEventManager($events);
        $this->objModel = new UserModel($this->connection, $this->entityManager);
    }

    // This is the default "index" action of the controller. It displays the 
    // Posts page containing the recent blog posts.
    public function indexAction() {

        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');
        else
            $this->layout()->auth = $this->auth;

        return new ViewModel();
    }

    /**
     * Login process with valid credintials.
     */
    public function loginAction() {

        if ($this->auth->hasIdentity())
            $this->redirect()->toRoute('appDashboard');

        // load login layout
        $this->layout('layout/layout-login');

        $form = new LoginForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter(new LoginFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $dataArr = (object) $this->params()->fromPost();

                $this->objModel->setEmail($dataArr->email);
                $this->objModel->setPassword($dataArr->password);
                $result = $this->objModel->authenticate();
                $arrMsg = $result->getMessages();

                if ($result->getCode() > 0) {
                    $this->auth->getStorage()->write(array(
                        'id' => $arrMsg[1],
                        'user_details' => $arrMsg[2]
                            )
                    );
                    $this->redirect()->toRoute('appDashboard');
                } else {
                    $this->error = $arrMsg[0];
                }
            } else {
                $this->error = 'Invalid credentials.';
            }
        }
        return new ViewModel(array('form' => $form, 'errorMessages' => $this->error));
    }

    /**
     * Logout from admin section.
     */
    public function logoutAction() {
        // Code for removing user authantication  
        $this->auth->clearIdentity();
        $this->redirect()->toRoute('appLogin');
    }

}
