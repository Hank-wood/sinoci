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

        // 加载 CI 自带资源
        if (noFile(APPPATH . 'resources/assets/' . $file) && file_exists($file = dirname(BASEPATH) . '/user_guide/_static/' . $file)) {
            $this->output->set_content_type(pathinfo($file, PATHINFO_EXTENSION));
            return file_get_contents($file);
        }
    }

}
