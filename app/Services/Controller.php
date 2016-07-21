<?php

namespace App\Services;

use ReflectionClass;

class Controller
{

    public function _remap(String $func, Array $args)
    {
        // 获取程序执行结果
        $output = call_user_func_array([$this, $func], $args);

        // 返回请求结果
        return $this->output->set_output($output);
    }

    public function __get(String $name)
    {
        // 修复 $this->agent
        $name === 'agent' && $name = 'user_agent';

        // 映射加载规则
        if ($name === 'load')
            $name = 'Loader';
        else if (in_array($name, ['session']))
            $path = 'libraries/' . $name;
        else if (in_array($name, ['email']))
            $path = 'libraries';
        else
            $name = is_loaded()[$name];

        // 返回 CI 类库
        if ($name) {
            return load_class($name, $path ?: 'core');
        }
    }

    public function __call(String $func, Array $args)
    {
        // 类名含命名空间
        $class = __NAMESPACE__ . '\\' . studly_case($func);

        // 创建反射类
        $class = new ReflectionClass($class);

        // 返回实例
        return $class->newInstanceArgs($args);
    }

}
