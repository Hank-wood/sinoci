<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Collection;

class Controller
{

    public function _remap($func, array $args)
    {
        // 排除不存在的方法
        method_exists(app(), $func) OR show_404();

        // 加载类库和语言
        app()->load->add_package_path(APPPATH . 'resources');

        // 获取程序执行结果
        $output = call_user_func_array([app(), $func], $args);

        // 转换数组
        is_array($output) && $output = collect($output);

        // 转换模型
        $output instanceof Model && $output = collect($output);

        // 转换分页
        $output instanceof AbstractPaginator && $output = $output->getCollection();

        // 设置响应类型
        $output instanceof Collection && app()->output->set_content_type('json');

        // 返回请求结果
        return app()->output->set_output($output);
    }

    public function __get($name)
    {
        // 修复 agent 类库
        $name === 'agent' && $name = 'user_agent';

        // 修复 cache 类库
        if ($name === 'cache') {
            app()->load->driver('cache', ['adapter' => 'redis', 'backup' => 'file']);
            return app()->cache;
        }

        // 映射加载规则
        if ($name === 'load')
            $name = 'Loader';
        else if (in_array($name, ['session']))
            $path = 'libraries/' . $name;
        else if (in_array($name, ['encryption', 'email', 'user_agent']))
            $path = 'libraries';
        else
            $name = is_loaded()[$name];

        // 返回 CI 类库
        if ($name) {
            return load_class($name, empty($path) ? 'core' : $path);
        }
    }

}
