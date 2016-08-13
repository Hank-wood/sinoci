<?php

namespace App\Services;

use Illuminate\Pagination\BootstrapThreePresenter;

class Pagination extends BootstrapThreePresenter
{

    protected function getPreviousButton($text = '上一页')
    {
        return parent::getPreviousButton($text);
    }

    protected function getNextButton($text = '下一页')
    {
        return parent::getNextButton($text);
    }

}
