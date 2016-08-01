<?php

use App\Services\Laravel;

$hook['pre_system'][] = function () {

    // 启用 Laravel 扩展
    config('use_laravel') && new Laravel;
};

$hook['post_controller_constructor'][] = function () {

    // 重新绑定实例
    $app =& get_instance();
    $app = app();
};
