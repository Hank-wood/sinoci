<?php

namespace App\Traits\Site;

trait ShowWelcome
{

    function showWelcome()
    {
        // 添加 CI 默认视图目录
        app()->load->add_package_path(dirname(BASEPATH) . '/application/');

        // 加载 CI 默认欢迎页
        return app()->load->view('welcome_message', null, true);
    }

}
