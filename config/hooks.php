<?php

// 引入 初始钩子配置
require_once dirname(BASEPATH).'/application/config/hooks.php';

$hook['pre_system'] =
    function () {};

$hook['pre_controller'] =
    function () {};

$hook['post_controller_constructor'] =
    function () {};

$hook['post_controller'] =
    function () {};

$hook['display_override'] =
    function () {};

$hook['cache_override'] =
    function () {};

$hook['post_system'] =
    function () {};
