<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

class Controller
{

    // 方法之间共享数据存放处
    public $data = [];

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
        // 别名映射转换
        array_key_exists($name, $alias = ['agent' => 'user_agent', 'unit' => 'unit_test']) && $name = $alias[$name];

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
        else if (in_array($name, ['email', 'encryption', 'unit_test', 'upload', 'user_agent']))
            $path = 'libraries';
        else
            $name = is_loaded()[$name];

        // 返回 CI 类库
        if ($name) {
            return load_class($name, empty($path) ? 'core' : $path);
        }
    }

    public function view($data = null, $view = null)
    {
        // 转换无数据模板
        is_string($data) && $view = $data;

        // 映射相应模板
        $view = $view ?: implode('.', [
            APP_ENV, app()->uri->rsegment(1), app()->uri->rsegment(2)
        ]);

        // 返回渲染结果
        return View::make($view, compact('data'));
    }

}
