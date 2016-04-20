<?php

// 引入 初始路由配置
require_once dirname(BASEPATH).'/application/config/routes.php';

// index
$route['api/(\w+)']['GET'] = '$1/index';
// create
$route['api/(\w+)/create']['GET'] = '$1/create';
// store
$route['api/(\w+)']['POST'] = '$1/store';
// show
$route['api/(\w+)/(:num)']['GET'] = '$1/show/$2';
// edit
$route['api/(\w+)/(:num)/edit']['GET'] = '$1/edit/$2';
// update
$route['api/(\w+)/(:num)']['PUT'] = '$1/update/$2';
// patch
$route['api/(\w+)/(:num)']['PATCH'] = '$1/patch/$2';
// destroy
$route['api/(\w+)/(:num)']['DELETE'] = '$1/destroy/$2';
