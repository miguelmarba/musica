<?php
/**
 * Created by PhpStorm.
 */

namespace Application\Controller\Factory;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Controller\IndexController;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Factory\InvokableFactory;
use stdClass;

class IndexControllerFactory implements FactoryInterface
{
    //entityMAnager se registra como un servicio en el administrador de servicio de ZF3
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        if (!empty($container)) {
            $entityManager = $container->get('doctrine.entitymanager.orm_default');
        }

        //inicializa el controlador e inyecta las dependencias
        return new IndexController($entityManager);
    }

}

$serviceManager = new ServiceManager([
    'factories' => [
        stdClass::class => InvokableFactory::class,
        IndexControllerFactory::class => IndexControllerFactory::class
    ]
]);