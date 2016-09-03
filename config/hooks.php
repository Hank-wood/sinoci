<?php

use App\Services\Event;
use App\Services\Laravel;
use Illuminate\Database\Capsule\Manager;

$hook['pre_system'][] = function () {

    // 启用 Laravel 扩展
    config('use_laravel') && new Laravel;

    // 捕获异常退出
    set_error_handler([new Event, 'error']);
    set_exception_handler([new Event, 'exception']);
};

$hook['pre_controller'][] = function () {

    // 调试状态下开启查询日志
    APP_DEBUG && Manager::connection()->enableQueryLog();
};

$hook['post_controller_constructor'][] = function () {

    // 重新绑定实例
    $app =& get_instance();
    $app = app();
};
