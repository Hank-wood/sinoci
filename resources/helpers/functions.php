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

        $manager = new db();

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

        $manager->setAsGlobal();
        $manager->bootEloquent();

        getenv('APP_DEBUG') &&
            $manager->enableQueryLog();
    }

}

if ( ! function_exists('db')) {

    function db () {
        return \Illuminate\Database\Capsule\Manager::class;
    }

}

if ( ! function_exists('resource')) {

    function resource ($_resource = '') {

        if (empty($_resource)) {
            return new \App\Resources\Resource;
        }

        if (class_exists("\\App\\Resources\\{$_resource}")) {
            return new "\\App\\Resources\\{$_resource}";
        }

        return new \App\Resources\Resource($_resource);
    }

}

if ( ! function_exists('service')) {

    function service ($_service = '') {
        return empty($_service) ?
            new \App\Services\Service :
            new "\\App\\Services\\{$_service}";
    }

}

if ( ! function_exists('table')) {

    function table ($_table = '') {
        return empty($_table) ?
            new \App\Tables\Table :
            new "\\App\\Tables\\{$_table}";
    }

}
