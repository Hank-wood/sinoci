<?php

namespace App\Traits\Site;

trait LinkUserGuide
{

    function linkUserGuide()
    {
        // 用户手册
        return app()->view('sinoci.index');
    }

}
