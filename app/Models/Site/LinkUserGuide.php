<?php

namespace App\Models\Site;

trait LinkUserGuide {

    function linkUserGuide () {
        header('Location: https://github.com/sinoci/sinoci');
    }
}
