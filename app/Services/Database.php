<?php

namespace App\Services;

use Illuminate\Database\Capsule\Manager;

class Database
{

    // 数据库结构
    private $schema;

    public function __construct(Array $schema)
    {
        // 初始化变量
        $this->schema = $schema;
    }

    public function create(Array $schema)
    {
        // 根据结构生成数据库表
        array_filter($schema ?: $this->schema, [$this, 'createTable'], true);

        // 链式调用，返回当前对象
        return $this;
    }

    private function createTable(Array $columns, String $table)
    {
        // 检测表是否已存在
        Manager::schema()->hasTable($table) OR

        // 创建表
        Manager::schema()->create($table, function ($table) use ($columns) {
            $this->createColumns($table, $columns);
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    private function createColumns($table, Array $columns)
    {
        // 循环定义列
        foreach ($columns as $name => $attributes) {

            // 转换字符串为数组
            if (is_string($attributes)) {
                $attributes = explode(' ', $attributes);
            }

            // 定义列
            list($name, $attributes[0]) = [$attributes[0], $name];
            call_user_func_array([$table, $name], $attributes);
        }
    }

}
