<?php

// 定义运行环境
defined('APP_ENV') OR
    define('APP_ENV', getenv('APP_ENV') ?: 'development');

// 是否开启调试模式
defined('APP_DEBUG') OR
    define('APP_DEBUG', getenv('APP_DEBUG'));

// 定义 APPPATH 常量：应用目录
defined('APPPATH') OR
    define('APPPATH', dirname(__DIR__).'/');

// 定义 BASEPATH 常量：CI 框架目录
defined('BASEPATH') OR
    define('BASEPATH', APPPATH.'vendor/codeigniter/framework/system/');

// 定义 VIEWPATH 常量：模版目录
defined('VIEWPATH') OR
    define('VIEWPATH', APPPATH.'resources/views/');

// 定义 ENVIRONMENT 常量：运行环境
define('ENVIRONMENT', APP_ENV);

// 设置控制器目录
$routing['directory'] = ENVIRONMENT;

// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
