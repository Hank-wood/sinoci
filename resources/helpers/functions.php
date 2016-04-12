<?php

if ( ! function_exists('wtf')) {

    function wtf () {
        echo '<pre style="font:12px/20px Consolas,Monaco,Courier New,Courier,monospace">';
        var_dump($_input);
        exit;
    }
}

if ( ! function_exists('useEloquent')) {

    function useEloquent ($_input) {

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

        $manager->bootEloquent();
    }

}
