<?php

namespace App\Services;

use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Formatter\Crunched;
use Leafo\ScssPhp\Server;

class Loader
{

    public function assets($name)
    {
        // 文件类型
        $type = head(explode('/', $name));

        // scss 编译
        if ($type === 'scss') {

            // 相对路径
            $name = substr($name, strlen($type) + 1);

            // 加载资源
            $this->scss($name);
        }

        // 加载 CI 自带资源
        noFile(APPPATH . 'resources/assets/' . $name) && $this->backup($name);

        // 结束程序
        exit;
    }

    public function scss($name)
    {
        // 优化文件名
        $name && $_GET['p'] = $name;

        // scss 编译器
        $scss = new Compiler;
        $scss->setFormatter(Crunched::class);

        // scss 服务启动
        $server = new Server(APPPATH . 'resources/assets/scss', config('cache_path'), $scss);
        return $server->serve();
    }

    public function backup($name)
    {
        // 绝对路径
        $name = dirname(BASEPATH) . '/user_guide/_static/' . $name;

        // 文件是否存在
        noFile($name) && show_404();

        // 加载输出类库
        $output = load_class('Output', 'core');

        // 设置响应类型
        $output->set_content_type(pathinfo($name, PATHINFO_EXTENSION));

        // 输出响应
        $output->set_output(file_get_contents($name))->_display();
    }

}
