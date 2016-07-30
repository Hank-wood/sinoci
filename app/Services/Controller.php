<?php

namespace App\Services;

use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Collection;
use ReflectionClass;

class Controller
{

    public function _remap($func, array $args)
    {
        // 排除不存在的方法
        method_exists($this, $func) OR show_404();

        // 获取程序执行结果
        $output = call_user_func_array([$this, $func], $args);

        // 转换数组
        is_array($output) && $output = collect($output);

        // 转换模型
        $output instanceof Table && $output = collect($output);

        // 转换分页
        $output instanceof AbstractPaginator && $output = $output->getCollection();

        // 设置响应类型
        $output instanceof Collection && app()->output->set_content_type('application/json');

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
        else if (in_array($name, ['email', 'user_agent']))
            $path = 'libraries';
        else
            $name = is_loaded()[$name];

        // 返回 CI 类库
        if ($name) {
            return load_class($name, empty($path) ? 'core' : $path);
        }
    }

    public function __call($func, array $args)
    {
        // 类名含命名空间
        $class = __NAMESPACE__ . '\\' . studly_case($func);

        // 创建反射类
        $class = new ReflectionClass($class);

        // 返回实例
        return $class->newInstanceArgs($args);
    }

}
