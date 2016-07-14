<?php

namespace App\Models\Site;

trait ShowWelcome {

    function showWelcome () {
        $this->load->add_package_path(dirname(BASEPATH).'/application/')->view('welcome_message');
    }
}
