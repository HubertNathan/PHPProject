<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOEfB9Uz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOEfB9Uz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOEfB9Uz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOEfB9Uz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOEfB9Uz\App_KernelDevDebugContainer([
    'container.build_hash' => 'OEfB9Uz',
    'container.build_id' => 'de78e358',
    'container.build_time' => 1727293712,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOEfB9Uz');
