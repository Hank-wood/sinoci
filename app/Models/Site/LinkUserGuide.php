<?php

namespace App\Models\Site;

trait LinkUserGuide {

    function linkUserGuide () {
        $target = dirname(BASEPATH).'/user_guide';
        $link_name = APPPATH.'public/user_guide';
        `ln -s {$target} {$link_name}`;
        header('Location: /user_guide');
    }
}
