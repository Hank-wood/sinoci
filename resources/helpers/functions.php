<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;

if (empty(function_exists('noFunc'))) {

    function noFunc($name)
    {
        return empty(function_exists($name));
    }

}

if (noFunc('noFile')) {

    function noFile($path)
    {
        return empty(file_exists($path));
    }

}

if (noFunc('config')) {

    function config($key)
    {
        return array_get(get_config(), $key);
    }

}

if (noFunc('useEloquent')) {

    function useEloquent(array $conn)
    {
        Paginator::currentPageResolver(function () {
            return empty($_GET['page']) ? 1 : $_GET['page'];
        });

        $manager = new Manager;
        $manager->addConnection($conn);
        $manager->setAsGlobal();
        $manager->bootEloquent();
    }

}

if (noFunc('app')) {

    function app($service = null)
    {
        return empty($service) ? $GLOBALS['CI'] : $GLOBALS['CI']->{$service}();
    }

}
