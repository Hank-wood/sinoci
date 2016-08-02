<?php

use Sami\Sami;
use Sami\Parser\Filter\TrueFilter;
use Symfony\Component\Finder\Finder;

return new Sami(
    Finder::create()
        ->files()
        ->name('*.php')
        ->exclude('vendor')
        ->in(__DIR__),
    [
        'build_dir' => __DIR__ . '/public/api',
        'cache_dir' => __DIR__ . '/storage/cache',
        'filter' => function () {
            return new TrueFilter();
        }
    ]
);
