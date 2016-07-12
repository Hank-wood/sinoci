<?php

$hook['pre_system'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'preSystem',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['pre_controller'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'preController',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['post_controller_constructor'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'postControllerConstructor',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['post_controller'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'postController',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['display_override'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'displayOverride',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['cache_override'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'cacheOverride',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];

$hook['post_system'] = [
    'class'    => 'App\Services\Hook',
    'function' => 'postSystem',
    'filename' => 'Hook.php',
    'filepath' => 'app/Services'
];
