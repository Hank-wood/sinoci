<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="Chrome=1,IE=edge">
        <meta name="author" content="4c89ff6f16397a24a15ae3244e4db9e8">
        <meta name="description" content="@yield( '描述', 'sinoci' )">
        <meta name="keywords" content="@yield( '关键字', 'sinoci' )">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
        <title>@yield( '标题', 'sinoci' )</title>
        @section('样式')
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="/assets/css/theme.css">
            <link rel="stylesheet" href="/assets/scss/sinoci.scss">
        @show
    </head>
    <body {{ app()->uri->rsegment(1) }}="{{ app()->uri->rsegment(2) }}" lang="{{
        array_get(
            [
                'chinese' => 'zh',
                'english' => 'en',
                'korean' => 'ko'
            ],
            app()->session->language ?: config('language')
        )
    }}">
        @yield('页面')
        @yield('弹窗')
        @section('脚本')
            <script src="/assets/js/jquery-1.11.1.min.js"></script>
            <script src="/assets/js/bootstrap.min.js"></script>
            <script src="/assets/underscore.js"></script>
            <script src="/assets/js/sinoci.js"></script>
        @show
    </body>
</html>