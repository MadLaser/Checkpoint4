<?php

namespace ContainerXn1uG67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D2meLSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d2me_LS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d2me_LS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'util' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'util' => '?',
        ]);
    }
}
