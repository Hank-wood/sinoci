<?php

// 引入 初始数据库配置
require_once dirname(BASEPATH).'/application/config/database.php';

$db['default']['hostname'] = '192.168.10.10';
$db['default']['username'] = 'homestead';
$db['default']['password'] = 'secret';
$db['default']['database'] = 'homestead';

// 使用 eloquent
useEloquent($db[$active_group]);
