<?php

namespace App\Services;

class Controller
{

    public function __get(String $name)
    {
        // 修补 $this->load
        $name === 'load' && $name = 'Loader';

        // 返回 CI 核心模块
        return load_class($name ?: is_loaded()[$name], 'core');
    }

}
