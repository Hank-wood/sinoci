<?php

namespace App\Services;

class Hook extends Service {

    public function __construct () {}

    public function preSystem () {}

    public function preController () {}

    public function postControllerConstructor () {}

    public function postController () {}

    public function displayOverride () {}

    public function cacheOverride () {}

    public function postSystem () {}

}
