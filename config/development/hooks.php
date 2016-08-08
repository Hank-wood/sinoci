<?php

$hook['pre_system'][] = function () {

    // 如果开发环境的数据库文件不存在
    if (noFile(config('db.database'))) {

        // 转移中文字符
        $file = iconv('gbk', 'utf-8', config('db.database'));

        // 创建 Sqlite 数据库
        new PDO('sqlite:' . $file);
    }

    set_exception_handler(function () {
        dd('exception');
        call_user_func_array('_exception_handler', func_get_args());
    });

    set_error_handler(function () {
        str_contains(func_get_arg(2), 'vendor/codeigniter/framework/system') OR dd('error');
        call_user_func_array('_error_handler', func_get_args());
    });

    register_shutdown_function(function () {
//        dd($GLOBALS['OUT']->get_header(), headers_list());
//        dd(func_get_args(), $GLOBALS, $GLOBALS['OUT'], debug_backtrace());
    });
};
