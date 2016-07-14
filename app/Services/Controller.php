<?php

namespace App\Services;

class Controller {

    public function __get (String $name) {
        return load_class($name === 'load' ? 'Loader' : is_loaded()[$name], 'core');
    }

}
