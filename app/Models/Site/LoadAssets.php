<?php

namespace App\Models\Site;

trait LoadAssets
{

    function loadAssets($name)
    {
        // 完整路径
        $file = implode('/', func_get_args());

        // scss 编译
        if ($name === 'scss') {

            // 相对路径
            $file = substr($file, strlen($name) + 1);

            // 加载资源
            app('Loader')->scss($file);
        }
    }

}
