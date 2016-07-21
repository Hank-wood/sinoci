<?php

if (empty(function_exists('noFunc'))) {

    function noFunc(String $name)
    {
        return empty(function_exists($name));
    }

}

if (noFunc('noFile')) {

    function noFile(String $path)
    {
        return empty(file_exists($path));
    }

}

if (noFunc('config')) {

    function config(String $key)
    {
        return array_get(get_config(), $key);
    }

}

if (noFunc('useEloquent')) {

    function useEloquent(Array $conn)
    {
        \Illuminate\Pagination\Paginator::currentPageResolver(function () {
            return isset($_GET['page']) ? $_GET['page'] : 1;
        });

        $manager = new \Illuminate\Database\Capsule\Manager;
        $manager->addConnection($conn);
        $manager->setAsGlobal();
        $manager->bootEloquent();
    }

}

if (noFunc('app')) {

    function app(String $service)
    {
        return $service ? $GLOBALS['CI']->{$service}() : $GLOBALS['CI'];
    }

}
