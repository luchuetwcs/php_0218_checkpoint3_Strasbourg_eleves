<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJuszogs\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJuszogs/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJuszogs.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJuszogs\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJuszogs\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Juszogs',
    'container.build_id' => '89db74ff',
    'container.build_time' => 1528442681,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJuszogs');