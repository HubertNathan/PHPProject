<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAZ4BrwN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAZ4BrwN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAZ4BrwN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAZ4BrwN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAZ4BrwN\App_KernelDevDebugContainer([
    'container.build_hash' => 'AZ4BrwN',
    'container.build_id' => '7c62d9a7',
    'container.build_time' => 1728070303,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAZ4BrwN');
