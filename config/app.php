<?php

// 定义 APPPATH 常量：应用目录
defined('APPPATH') or define('APPPATH', substr(__DIR__, 0, -6));

// 定义 BASEPATH 常量：CI 框架目录
defined('BASEPATH') or define('BASEPATH', APPPATH.'vendor/codeigniter/framework/system/');

// 定义 ENVIRONMENT 常量：运行环境
defined('ENVIRONMENT') or define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');

// 定义 VIEWPATH 常量：模版目录
defined('VIEWPATH') or define('VIEWPATH', APPPATH.'resources/views/');

// 设置控制器目录
$routing['directory'] = ENVIRONMENT;

// 调试环境下私有配置
if (getenv('APP_DEBUG'));

// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
