<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXn1uG67\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXn1uG67/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXn1uG67.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXn1uG67\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXn1uG67\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xn1uG67',
    'container.build_id' => 'b3b4e622',
    'container.build_time' => 1643899053,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXn1uG67');