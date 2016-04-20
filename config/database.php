<?php

// 引入 初始数据库配置
require_once dirname(BASEPATH).'/application/config/database.php';

$db['default']['hostname'] = '';
$db['default']['username'] = '';
$db['default']['password'] = '';
$db['default']['database'] = '';

// 使用 eloquent
useEloquent($db[$active_group]);
