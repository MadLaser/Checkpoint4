<?php

namespace ContainerXn1uG67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2kjha2JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2kjha2J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2kjha2J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.mo6jsYP', 'get_ServiceLocator_Mo6jsYPService', true],
            'App\\Controller\\AdminController::modification' => ['privates', '.service_locator.O0Eeu_m', 'get_ServiceLocator_O0EeuMService', true],
            'App\\Controller\\AdminController::suppression' => ['privates', '.service_locator.Sjx_t6d', 'get_ServiceLocator_SjxT6dService', true],
            'App\\Controller\\GlobalController::inscription' => ['privates', '.service_locator.e.A6opG', 'get_ServiceLocator_E_A6opGService', true],
            'App\\Controller\\GlobalController::login' => ['privates', '.service_locator.d2me_LS', 'get_ServiceLocator_D2meLSService', true],
            'App\\Controller\\VoitureController::index' => ['privates', '.service_locator.mo6jsYP', 'get_ServiceLocator_Mo6jsYPService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.mo6jsYP', 'get_ServiceLocator_Mo6jsYPService', true],
            'App\\Controller\\AdminController:modification' => ['privates', '.service_locator.O0Eeu_m', 'get_ServiceLocator_O0EeuMService', true],
            'App\\Controller\\AdminController:suppression' => ['privates', '.service_locator.Sjx_t6d', 'get_ServiceLocator_SjxT6dService', true],
            'App\\Controller\\GlobalController:inscription' => ['privates', '.service_locator.e.A6opG', 'get_ServiceLocator_E_A6opGService', true],
            'App\\Controller\\GlobalController:login' => ['privates', '.service_locator.d2me_LS', 'get_ServiceLocator_D2meLSService', true],
            'App\\Controller\\VoitureController:index' => ['privates', '.service_locator.mo6jsYP', 'get_ServiceLocator_Mo6jsYPService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::modification' => '?',
            'App\\Controller\\AdminController::suppression' => '?',
            'App\\Controller\\GlobalController::inscription' => '?',
            'App\\Controller\\GlobalController::login' => '?',
            'App\\Controller\\VoitureController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:modification' => '?',
            'App\\Controller\\AdminController:suppression' => '?',
            'App\\Controller\\GlobalController:inscription' => '?',
            'App\\Controller\\GlobalController:login' => '?',
            'App\\Controller\\VoitureController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}