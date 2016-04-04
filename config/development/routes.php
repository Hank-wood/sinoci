<?php

$route['user_guide'] =
    function()
    {
        if (is_dir(APPPATH.'public/user_guide'));

        else {
            $target = dirname(BASEPATH).'/user_guide';
            $link_name = APPPATH.'public/user_guide';
            `ln -s $target $link_name`;
            header('Location: /user_guide');
        }

        exit;
    };
