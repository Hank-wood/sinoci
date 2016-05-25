<?php

namespace App\Services;

use App\Models\Hook\PreSystem;
use App\Models\Hook\PreController;
use App\Models\Hook\PostControllerConstructor;
use App\Models\Hook\PostController;
use App\Models\Hook\DisplayOverride;
use App\Models\Hook\CacheOverride;
use App\Models\Hook\PostSystem;

class Hook extends Service {

    use PreSystem, PreController, PostControllerConstructor, PostController, DisplayOverride, CacheOverride, PostSystem;

    public function __construct () {}

}
