<?php

// 定义 BASEPATH 常量：CI 框架目录
define('BASEPATH', __DIR__.'/vendor/codeigniter/framework/system/');
// 定义 APPPATH 常量：应用目录
define('APPPATH', BASEPATH.'../application/');
// 定义 ENVIRONMENT 常量：运行环境
define('ENVIRONMENT', 'development');
// 定义 VIEWPATH 常量：模版目录
define('VIEWPATH', APPPATH.'views/');
// 请求 CI 框架入口
require_once BASEPATH.'core/CodeIgniter.php';
