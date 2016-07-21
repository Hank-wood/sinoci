<?php

$hook['pre_system'][] = function () {

    // 加载数据库配置
    load_class('Config', 'core')->load('database');

    // 开启 Eloquent ORM
    config('enable_eloquent') && useEloquent(config('db'));

};

$hook['post_controller_constructor'][] = function () {

    // 重新绑定实例
    $app =& get_instance();
    $app = app();
};
