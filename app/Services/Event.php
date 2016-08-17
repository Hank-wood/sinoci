<?php

namespace App\Services;

class Event
{

    public function error()
    {
        str_contains(func_get_arg(2), str_replace('/', DIRECTORY_SEPARATOR, BASEPATH)) OR call_user_func_array('_error_handler', func_get_args());
    }

    public function exception()
    {
        call_user_func_array('_exception_handler', func_get_args());
    }

}
