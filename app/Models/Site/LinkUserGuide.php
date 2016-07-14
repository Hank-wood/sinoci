<?php

namespace App\Models\Site;

trait LinkUserGuide
{

    function linkUserGuide()
    {
        // 跳转到 sinoci 官网
        header('Location: https://github.com/sinoci/sinoci');
    }

}
