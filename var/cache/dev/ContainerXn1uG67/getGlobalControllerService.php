<?php

namespace ContainerXn1uG67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGlobalControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GlobalController' shared autowired service.
     *
     * @return \App\Controller\GlobalController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GlobalController.php';

        $container->services['App\\Controller\\GlobalController'] = $instance = new \App\Controller\GlobalController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\GlobalController', $container));

        return $instance;
    }
}
