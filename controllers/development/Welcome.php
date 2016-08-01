<?php

use App\Services\Controller;
use App\Models\Site\ShowWelcome;
use App\Models\Site\LinkUserGuide;

class Welcome extends Controller
{

    use ShowWelcome, LinkUserGuide {
        ShowWelcome::showWelcome as index;
        LinkUserGuide::linkUserGuide as guide;
    }

}
