<?php

use App\Controller;

class Welcome extends CI_Controller {

    public function index()
    {
        echo (new Controller)->welcome();
    }

}
