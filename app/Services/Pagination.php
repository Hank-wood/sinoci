<?php

namespace App\Services;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Support\Facades\View;

class Pagination extends BootstrapThreePresenter
{

    public function render()
    {
        if (empty($this->hasPages())) {
            return '';
        }

        $data = [
            'current' => $this->currentPage(),
            'default' => parent::render(),
            'query' => array_except(app()->input->get(), 'page'),
            'total' => $this->lastPage()
        ];

        return View::make(config('pagination.view'), compact('data'));
    }

    protected function getPreviousButton($text = null)
    {
        return parent::getPreviousButton($text ?: config('pagination.prev'));
    }

    protected function getNextButton($text = null)
    {
        return parent::getNextButton($text ?: config('pagination.next'));
    }

    protected function getLinks()
    {
        $sideNum = config('pagination.side');

        $last = $this->lastPage();
        $current = $this->currentPage();

        $start = $current - $sideNum;
        $end = $current + $sideNum;

        if ($start > $last - $sideNum * 2) {
            $start = $last - $sideNum * 2;
            $end = $last;
        }

        if ($start < 1) {
            $start = 1;
            $end = $last > $sideNum * 2 ? $sideNum * 2 + 1 : $last;
        }

        $slider = $this->paginator->getUrlRange($start, $end);

        return $this->getUrlLinks($slider);
    }

}
