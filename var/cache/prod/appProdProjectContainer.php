<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUbe07s5\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUbe07s5/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUbe07s5.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUbe07s5\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUbe07s5\appProdProjectContainer([
    'container.build_hash' => 'Ube07s5',
    'container.build_id' => 'd2e345ce',
    'container.build_time' => 1609686702,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUbe07s5');
