<?php

class Welcome extends Controller {

    public function index () {
        // 添加视图目录
        $this->load->add_package_path(dirname(BASEPATH).'/application/');

        // 设置 $elapsed_time 变量
        $elapsed_time =
            $this->benchmark->elapsed_time(
                'loading_time:_base_classes_start',
                'loading_time:_base_classes_end'
            );

        // 渲染模版
        $welcome_message =
            $this->view(
                'welcome_message',
                compact('elapsed_time'),
                TRUE
            );

        // 过滤多余信息并输出
        // TODO
        // 1. 过滤正则
        $this->_output =
            preg_replace(
                '/<p.+\/code>/',
                '',
                $welcome_message,
                1
            );
    }

}
