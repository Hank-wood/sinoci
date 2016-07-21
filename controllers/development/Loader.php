<?php

use App\Services\Controller;
use Leafo\ScssPhp\Server;

class Loader extends Controller
{

    public function scss()
    {
        // scss 编译
        Server::serveFrom(APPPATH . 'resources/assets/scss');
    }

}
