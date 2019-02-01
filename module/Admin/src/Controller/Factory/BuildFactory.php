<?php
namespace Admin\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class BuildFactory implements FactoryInterface
{
    private $objectManager;
    private $connection;


    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        $this->objectManager = $container->get('Doctrine\ORM\EntityManager');
        $this->connection =$this->objectManager->getConnection();
        $constr ="\\".$requestedName;
        return new $constr($this->objectManager,$this->connection);
    }
}