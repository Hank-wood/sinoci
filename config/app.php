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

// 是否打开调试
ini_set('display_errors', getenv('APP_DEBUG'));

// 运行环境配置
file_exists(APPPATH.'config/'.ENVIRONMENT.'/app.php') &&
    require_once(APPPATH.'config/'.ENVIRONMENT.'/app.php');

// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
