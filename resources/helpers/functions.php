<?php

if ( ! function_exists('wtf')) {

    function wtf ($_input) {
        echo '<pre style="font:12px/20px Consolas,Monaco,Courier New,Courier,monospace">';
        var_dump($_input);
        exit;
    }

}

if ( ! function_exists('useEloquent')) {

    function enableEloquent () {

        \Illuminate\Pagination\Paginator::currentPageResolver(function () {
            return isset($_GET['page']) ? $_GET['page'] : 1;
        });

        $manager = new \Illuminate\Database\Capsule\Manager;
        
        $manager->addConnection(config_item('db'));
        $manager->setAsGlobal();
        $manager->bootEloquent();

        getenv('APP_DEBUG') &&
            $manager->connection()->enableQueryLog();
    }

}

if ( ! function_exists('resource')) {

    function resource ($_resource = '') {

        if (class_exists("\\App\\Resources\\{$_resource}")) {
            $class = '\\App\\Resources\\' . $_resource;
            return new $class;
        }

        return new \App\Service\Resource($_resource);
    }

}

if ( ! function_exists('service')) {

    function service ($_service = '') {

        if (class_exists("\\App\\Services\\{$_service}")) {
            $class = '\\App\\Services\\' . $_service;
            return new $class;
        }

        return new \App\Services\Service;
    }

}

if ( ! function_exists('table')) {

    function table ($_table = '') {

        if (class_exists("\\App\\Tables\\{$_table}")) {
            $class = '\\App\\Tables\\' . $_table;
            return new $class;
        }

        return new \App\Tables\Table;
    }

}
