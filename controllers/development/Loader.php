<?php

use App\Services\Controller;
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Formatter\Crunched;
use Leafo\ScssPhp\Server;

class Loader extends Controller
{

    public function scss(String $name)
    {
        // 优化文件名
        $name && $_GET['p'] = $name . '.scss';

        // scss 编译器
        $scss = new Compiler;
        $scss->setFormatter(Crunched::class);

        // scss 服务启动
        $server = new Server(APPPATH . 'resources/assets/scss', config_item('cache_path'), $scss);
        $server->serve();
    }

}
