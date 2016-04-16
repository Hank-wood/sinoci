<?php

// 定义 APPPATH 常量：应用目录
defined('APPPATH') OR
    define('APPPATH', dirname(__DIR__).'/');

// 定义 BASEPATH 常量：CI 框架目录
defined('BASEPATH') OR
    define('BASEPATH', APPPATH.'vendor/codeigniter/framework/system/');

// 定义 ENVIRONMENT 常量：运行环境
defined('ENVIRONMENT') OR
    define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');

// 定义 VIEWPATH 常量：模版目录
defined('VIEWPATH') OR
    define('VIEWPATH', APPPATH.'resources/views/');

// 设置控制器目录
$routing['directory'] = ENVIRONMENT;

// 调试环境下配置
if (getenv('APP_DEBUG') OR ENVIRONMENT === 'development') {
    ini_set('display_errors', TRUE);
    ini_set('opcache.enable', FALSE);
}
else {
    ini_set('display_errors', FALSE);
}

// 设置默认运行时区
date_default_timezone_set('PRC');

// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
