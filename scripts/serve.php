<?php

// 应用根目录
$root = dirname(__DIR__);

// 生成缓存目录
file_exists($root . '/storage/cache') OR mkdir($root . '/storage/cache');

// 获取访问路径
$_SERVER['PATH_INFO'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 转义字符
$_SERVER['PATH_INFO'] = urldecode($_SERVER['PATH_INFO']);

// 排除根目录与 index.php 开头
if ($_SERVER['PATH_INFO'] === '/' OR substr($_SERVER['PATH_INFO'], 1, 9) === 'index.php') ;
else {

    // 检查文件
    if (file_exists($root . '/public' . $_SERVER['PATH_INFO'])) {
        return false;
    }

    // 设置脚本
    $_SERVER['SCRIPT_NAME'] = 'index.php';
}

// 执行脚本
require_once $root . '/public/index.php';
