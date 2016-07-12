<?php

namespace App\Models\Site;

trait ShowWelcome {

    function showWelcome () {

        // 添加视图目录
        $this->load->add_package_path(dirname(BASEPATH).'/application/');

        return $this->view('welcome_message');
    }
}
