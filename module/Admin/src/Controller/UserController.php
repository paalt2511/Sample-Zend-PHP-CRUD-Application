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
use Admin\Model\UserModel;
use Admin\Form\UserForm;
use Admin\Form\Filter\UserFormFilter;

class UserController extends AbstractActionController
{

    protected $auth;
    private $entityManager;
    private $connection;
    protected $objModel;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager, $connection)
    {
        $this->entityManager = $entityManager;
        $this->connection = $connection;
        $this->auth = new AuthenticationService();
    }
    public function onDispatch(MvcEvent $e)
    {
        # Get user identity
        $this->auth = new AuthenticationService();
        if (!$this->auth->hasIdentity()) {
            $this->redirect()->toRoute('appLogin');

        }
        return parent::onDispatch($e);
    }

    public function setEventManager(EventManagerInterface $events)
    {

        parent::setEventManager($events);
        $this->objModel = new UserModel($this->connection, $this->entityManager);
    }

    /**
     * List of all Users
     */
    public function indexAction()
    {

        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');

        $list = [];
        foreach ($this->objModel->list() as $key => $value) {
            $list[$key]['id'] = $value->getId();
            $list[$key]['name'] = "{$value->getFname()} {$value->getLname()}";
            $list[$key]['email'] = $value->getEmail();
            $list[$key]['mobile'] = $value->getMobileNo();
            $list[$key]['address'] = "{$value->getAddressLine1()} {$value->getAddressLine2()}";
            $list[$key]['status'] = $value->getStatus() ? "Active" : "Inactive";
            $list[$key]['createdAt'] = $value->getCreatedAt()->format('Y-m-d');
            $list[$key]['updatedAt'] = $value->getUpdatedAt()->format('Y-m-d');
        }
        return new ViewModel([
            'list' => $list,
            'url' => $this->getRequest()->getUri()->getScheme() . '://' . $this->getRequest()->getUri()->getHost().$this->getRequest()->getUri()->getPath()
        ]);
    }

    /**
     * Create a new user
     */
    public function createAction()
    {

        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');

            $form = new UserForm();
            $request = $this->getRequest();
            if ($request->isPost()) {
                $form->setInputFilter(new UserFormFilter());
                $form->setData($request->getPost());
                if ($form->isValid()) {
                    $dataArr = (object) $this->params()->fromPost();
                    $id = $this->objModel->create($dataArr);
                    if($id > 0) {
                        $this->redirect()->toRoute('userList');
                    }
                }
            }
            $viewModel = new ViewModel([
                'form'=> $form,
                'title' => 'Create User'
            ]);
            $viewModel->setTemplate('admin/user/form.phtml');
            return $viewModel;
    }

    /**
     * Update an existing user
     */
    public function updateAction()
    {

        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');

        $data = $this->objModel->findById($this->params()->fromRoute('id'));
        if($data) {
            $form = new UserForm();
            $form->setData($data);
            $form->get('submit')->setValue('Update');
            $request = $this->getRequest();
            if ($request->isPost()) {
                $form->setInputFilter(new UserFormFilter());
                $form->setData($request->getPost());
                if ($form->isValid()) {
                    $dataArr = (object) $this->params()->fromPost();
                    $id = $this->objModel->update($dataArr);
                    if($id > 0) {
                        $this->redirect()->toRoute('userList');
                    }
                }
            }
            $viewModel = new ViewModel([
                'form'=> $form,
                'title' => 'Update User'
            ]);
            $viewModel->setTemplate('admin/user/form.phtml');
            return $viewModel;
        } else {
            $this->redirect()->toRoute('userList');
        }
    }

    /**
     * Remove an existing user.
     */
    public function removeAction()
    {
        if (!$this->auth->hasIdentity())
            $this->redirect()->toRoute('appLogin');
        
        $data = $this->objModel->findById($this->params()->fromRoute('id'));
        if($data) {
            $this->objModel->remove($this->params()->fromRoute('id'));
            $this->redirect()->toRoute('userList');
        } else {
            $this->redirect()->toRoute('userList');
        }
    }
}
