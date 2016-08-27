<?php

use App\Models\Site\ShowWelcome;
use App\Models\Site\LinkUserGuide;
use App\Services\Controller;

class Welcome extends Controller
{

    use ShowWelcome, LinkUserGuide {
        ShowWelcome::showWelcome as index;
        LinkUserGuide::linkUserGuide as guide;
    }

}
