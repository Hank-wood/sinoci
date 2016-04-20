<?php

namespace App\Services;

class Service {

    protected $CI;

    public function __construct () {
        $this->$CI =& get_instance();
    }

}
