<?php

// 引入 初始自动加载配置
require_once dirname(BASEPATH).'/application/config/autoload.php';

// 开启 数据库 自动加载
// $autoload['libraries'][] = 'database';

// 开启 会话 自动加载
$autoload['libraries'][] = 'session';

// 开启 模板引擎 自动加载
$autoload['libraries'][] = 'parser';
