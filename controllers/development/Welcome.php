<?php

use App\Services\Controller;
use App\Models\Site\ShowWelcome;
use App\Models\Site\LinkUserGuide;
use App\Models\Site\LoadAssets;

class Welcome extends Controller
{

    use ShowWelcome, LinkUserGuide, LoadAssets {
        ShowWelcome::showWelcome as index;
        LinkUserGuide::linkUserGuide as guide;
        LoadAssets::loadAssets as assets;
    }

}
