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

    public function render()
    {
        return $this->hasPages() ? $this->getPrepend() . parent::render() . $this->getAppend() : '';
    }

    protected function getPrepend()
    {
        return '';
    }

    protected function getAppend()
    {
        return '';
    }

}
