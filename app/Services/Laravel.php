<?php

namespace App\Services;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use Illuminate\Container\Container;

class Laravel
{

    private static $container;

    public function __construct()
    {
        // 初始化容器
        self::$container = $this->getContainer();

        // 循环开启功能
        array_filter(config('use_laravel'), function ($v) {
            call_user_func([$this, 'use' . $v]);
        });
    }

    protected function getContainer()
    {
        // 返回单个容器
        return self::$container ?: new Container;
    }

    public function useBlade()
    {

    }

    public function useEloquent()
    {
        // 加载数据库配置
        load_class('Config', 'core')->load('database');

        // 修复分页
        Paginator::currentPageResolver(function () {
            return empty($_GET['page']) ? 1 : $_GET['page'];
        });

        // 初始化 Eloquent
        $manager = new Manager(self::$container);
        $manager->addConnection(config('db'));
        $manager->setAsGlobal();
        $manager->bootEloquent();
    }

}
