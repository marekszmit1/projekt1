<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1ccFYX2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1ccFYX2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1ccFYX2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1ccFYX2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1ccFYX2\App_KernelDevDebugContainer([
    'container.build_hash' => '1ccFYX2',
    'container.build_id' => 'e91026dd',
    'container.build_time' => 1653326361,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1ccFYX2');
