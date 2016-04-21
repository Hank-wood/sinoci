<?php

// 引入 初始路由配置
require_once dirname(BASEPATH).'/application/config/routes.php';

// api:index
$route['api/(\w+)']['GET'] = '$1/index';
// api:create
$route['api/(\w+)/create']['GET'] = '$1/create';
// api:store
$route['api/(\w+)']['POST'] = '$1/store';
// api:show
$route['api/(\w+)/(:num)']['GET'] = '$1/show/$2';
// api:edit
$route['api/(\w+)/(:num)/edit']['GET'] = '$1/edit/$2';
// api:update
$route['api/(\w+)/(:num)']['PUT'] = '$1/update/$2';
// api:patch
$route['api/(\w+)/(:num)']['PATCH'] = '$1/patch/$2';
// api:destroy
$route['api/(\w+)/(:num)']['DELETE'] = '$1/destroy/$2';
