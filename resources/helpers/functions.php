<?php

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

if (noFunc('app')) {

    function app()
    {
        return $GLOBALS['CI'];
    }

}
