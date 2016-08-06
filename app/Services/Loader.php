<?php

namespace App\Services;

use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Formatter\Crunched;
use Leafo\ScssPhp\Server;

class Loader
{

    public function assets($name)
    {
        // 解码资源名
        $name = rawurldecode($name);

        // 资源类型
        $type = head(explode('/', $name));

        // 编译插件
        method_exists($this, $type) OR $type = 'raw';

        // 加载资源
        call_user_func([$this, $type], $name);

        // 结束程序
        exit;
    }

    public function raw($name)
    {
        // 资源路径
        $paths = [
            APPPATH . 'resources/assets/',
            dirname(BASEPATH) . '/user_guide/_static/',
            APPPATH . 'vendor/sami/sami/Sami/Resources/themes/default/',
        ];

        // 循环路径
        foreach ($paths as $path) {

            // 绝对路径
            $file = $path . $name;

            // 资源存在, 跳出循环
            if (file_exists($file)) {
                break;
            }

            // 重置路径
            $file = null;
        }

        // 文件是否存在
        empty($file) && show_404();

        // 加载输出类库
        $output = load_class('Output', 'core');

        // 设置响应类型
        $output->set_content_type(pathinfo($name, PATHINFO_EXTENSION));

        // 输出响应
        $output->set_output(file_get_contents($file))->_display();
    }

    public function scss($name)
    {
        // 优化文件名
        $name && $_GET['p'] = $name;

        // scss 编译器
        $scss = new Compiler;
        $scss->setFormatter(Crunched::class);

        // scss 服务启动
        $server = new Server(APPPATH . 'resources/assets', config('cache_path'), $scss);
        $server->serve();
    }

}
