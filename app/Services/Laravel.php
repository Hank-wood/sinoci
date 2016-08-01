<?php

namespace App\Services;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;

class Laravel
{

    public function __construct()
    {
        array_filter(config('use_laravel'), function ($v) {
            call_user_func([$this, 'use' . $v]);
        });
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
        $manager = new Manager;
        $manager->addConnection(config('db'));
        $manager->setAsGlobal();
        $manager->bootEloquent();
    }
}