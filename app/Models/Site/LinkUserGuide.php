<?php

namespace App\Models\Site;

use Illuminate\Support\Facades\View;

trait LinkUserGuide
{

    function linkUserGuide()
    {
        // 用户手册
        return View::make('welcome');
    }

}
