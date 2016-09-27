<?php

namespace App\Models;

use App\Services\Model;
use App\Traits\Site\LinkUserGuide;
use App\Traits\Site\ShowWelcome;

class Site extends Model
{

    use LinkUserGuide, ShowWelcome;

}