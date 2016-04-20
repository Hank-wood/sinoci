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
        return \Illuminate\Database\Capsule\Manager;
    }

}

if ( ! function_exists('resource')) {

    function resource (&$_route, $_rule) {
        foreach ($_rule as $k => $v) {
            // index
            $_route[$k]['GET'] = $v.'/index';
            // create
            $_route[$k.'/create']['GET'] = $v.'/create';
            // store
            $_route[$k]['POST'] = $v.'/store';
            // show
            $_route[$k.'/(:num)']['GET'] = $v.'/show/$1';
            // edit
            $_route[$k.'/(:num)/edit']['GET'] = $v.'/edit/$1';
            // update
            $_route[$k.'/(:num)']['PUT'] = $v.'/update/$1';
            // patch
            $_route[$k.'/(:num)']['PATCH'] = $v.'/patch/$1';
            // destroy
            $_route[$k.'/(:num)']['DELETE'] = $v.'/destroy/$1';
        }
    }

}
