<?php

use App\Services\Controller;

class Welcome extends Controller
{

    public function __construct()
    {
        app('Permission')->basic();
    }

    public function index()
    {
        return app('Site')->showWelcome();
    }

    public function guide()
    {
        return app('Site')->linkUserGuide();
    }

}
