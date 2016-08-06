(function (document) {
    // 类库列表
    var scripts = [
            '/assets/js/jquery-1.11.1.min.js',
            '/assets/js/bootstrap.min.js',
            '/assets/js/typeahead.min.js',
            '/assets/underscore.js'
        ],
        head = document.querySelector('head');

    // 循环加载类库
    for (var i = 0, j = scripts.length; i < j; i++) {
        var script = document.createElement('script');
        script.src = scripts[i];
        head.appendChild(script);
    }
})(document);
