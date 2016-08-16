<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SINOCI</title>
        <link rel="stylesheet" href="/assets/scss/sinoci/index.scss">
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/typeahead.min.js"></script>
        <script src="/assets/underscore.js"></script>
        <script src="/assets/js/sinoci/index.js"></script>
    </head>
    <body>
        <sinoci-layout>
            @yield('页面')
        </sinoci-layout>

        @yield('弹窗')
    </body>
</html>
