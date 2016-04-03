<?php

$route['user_guide'] =
    function()
    {
        if (is_dir(APPPATH.'public/user_guide'));

        else {
            $target = substr(BASEPATH, 0 ,-7).'user_guide';
            $link_name = APPPATH.'public/user_guide';
            `ln -s $target $link_name`;
            header('Location: /user_guide');
        }

        exit;
    };
