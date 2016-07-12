<?php

// 引入 初始路由配置
require_once dirname(BASEPATH).'/application/config/routes.php';

// resources:index
$route['resources/(\w+)']['GET'] = '$1/index';
// resources:create
$route['resources/(\w+)/create']['GET'] = '$1/create';
// resources:store
$route['resources/(\w+)']['POST'] = '$1/store';
// resources:show
$route['resources/(\w+)/(:num)']['GET'] = '$1/show/$2';
// resources:edit
$route['resources/(\w+)/(:num)/edit']['GET'] = '$1/edit/$2';
// resources:update
$route['resources/(\w+)/(:num)']['PUT'] = '$1/update/$2';
// resources:patch
$route['resources/(\w+)/(:num)']['PATCH'] = '$1/patch/$2';
// resources:destroy
$route['resources/(\w+)/(:num)']['DELETE'] = '$1/destroy/$2';
