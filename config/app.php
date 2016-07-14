<?php

// 设置运行环境
$_['APP_ENV'] = getenv('APP_ENV') ?: 'development';

// 是否调试模式
$_['APP_DEBUG'] = getenv('APP_DEBUG');

// 设置应用目录
$_['APPPATH'] = dirname(__DIR__) . '/';

// 设置 CI 框架目录
$_['BASEPATH'] = $_['APPPATH'] . 'vendor/codeigniter/framework/system/';

// 设置模版目录
$_['VIEWPATH'] = $_['APPPATH'] . 'resources/views/';

// 循环定义系统常量
foreach ($_ as $k => $v) {
    defined($k) OR define($k, $v);
}

// 定义 ENVIRONMENT 常量：运行环境
define('ENVIRONMENT', APP_ENV);

// 设置控制器目录
$routing['directory'] = ENVIRONMENT;

// 请求 CI 框架入口
require_once BASEPATH . 'core/CodeIgniter.php';
