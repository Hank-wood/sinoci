<?php

namespace App\Models\Site;

trait ShowWelcome
{

    function showWelcome()
    {
        // 添加 CI 默认视图目录
        @$this->load->add_package_path(dirname(BASEPATH) . '/application/');

        // 加载 CI 默认欢迎页
        return $this->load->view('welcome_message', null, true);
    }

}
