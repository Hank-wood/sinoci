<?php

if ( ! function_exists('wtf')) {

    function wtf ($_input) {
        echo '<pre style="font:12px/20px Consolas,Monaco,Courier New,Courier,monospace">';
        var_dump($_input);
        exit;
    }

}

if ( ! function_exists('useEloquent')) {

    function useEloquent ($_input) {

        \Illuminate\Pagination\Paginator::currentPageResolver(function () {
            return isset($_GET['page']) ? $_GET['page'] : 1;
        });

        $manager = new \Illuminate\Database\Capsule\Manager;

        $manager->addConnection([
            'driver'    => 'mysql',
            'host'      => $_input['hostname'],
            'database'  => $_input['database'],
            'username'  => $_input['username'],
            'password'  => $_input['password'],
            'charset'   => $_input['char_set'],
            'collation' => $_input['dbcollat'],
            'prefix'    => $_input['dbprefix']
        ]);

        // $manager->setAsGlobal();
        $manager->bootEloquent();

        getenv('APP_DEBUG') &&
            $manager->enableQueryLog();
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
