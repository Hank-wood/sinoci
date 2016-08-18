<?php

namespace App\Services;

class Event
{

    public function error()
    {
        // 捕捉非框架错误
        str_contains(func_get_arg(2), str_replace('/', DIRECTORY_SEPARATOR, BASEPATH)) OR call_user_func_array('_error_handler', func_get_args());
    }

    public function exception()
    {
        // 捕捉异常
        call_user_func_array('_exception_handler', func_get_args());
    }

}
