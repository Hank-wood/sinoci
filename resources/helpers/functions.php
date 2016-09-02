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

if (noFunc('app')) {

    function app()
    {
        return $GLOBALS['CI'];
    }

}

if (noFunc('config')) {

    function config($key)
    {
        return array_get(get_config(), $key);
    }

}

if (noFunc('lang')) {

    function lang($key, $lang = null)
    {
        $line = explode('@', $key);

        $lang OR $lang = app()->session->language ?: config('language');

        $file = array_get($line, 1) ?: APP_ENV;

        app()->lang->load($file, $lang, false, false);

        return app()->lang->line($line[0]) ?: $line[0];
    }

}
