<?php

$hook['pre_system'][] = function () {

    // 如果开发环境的数据库文件不存在
    if (noFile(config('db.database'))) {

        // 转移中文字符
        $file = iconv('gbk', 'utf-8', config('db.database'));

        // 创建 Sqlite 数据库
        new PDO('sqlite:' . $file);
    }

};
