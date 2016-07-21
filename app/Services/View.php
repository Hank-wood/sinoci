<?php

namespace App\Services;

class View
{
    // 布局模板
    private $layout;

    // 视图模板
    private $view;

    // 渲染数据
    private $data;

    public function __construct(String $view, Array $data, Boolean $noLayout)
    {
        // 拆分视图与布局
        list($view, $layout) = explode(':', $view);

        // 初始化布局，顺序依次为：函数调用动态输入 > 实例属性 $layout > 类名
        $noLayout OR $this->layout = $layout ?: app()->layout ?: app()->router->class;

        // 添加默认前缀
        strstr($layout, '/') OR $this->layout = 'layout/' . $this->layout;

        // 初始化变量
        $this->view = $view;
        $this->data = $data;
    }

    private function render()
    {
        // 渲染视图
        $view = app()->load->view($this->view, $this->data, true);

        // 渲染模板
        if ($this->hasLayout()) {
            $view = app()->load->view($this->layout, ['content' => $view], true);
        }

        // 返回渲染结果
        return (String)$view;
    }

    private function hasLayout()
    {
        // 检测布局是否存在
        return $this->layout && file_exists(VIEWPATH . $this->layout . '.php');
    }

    private function __toString()
    {
        return $this->render();
    }

}
