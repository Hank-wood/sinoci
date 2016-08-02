(function (document) {
    // 类库列表
    var scripts = [
            '/assets/jquery.js',  // jquery@1.8.3
            '/assets/underscore.js',  // underscore@1.3.1
            '/assets/js/jquery-1.11.1.min.js',  // jquery@1.11.1
            '/assets/js/bootstrap.min.js',  // bootstrap@3.3.1
            '/assets/js/typeahead.min.js'  // typeahead@0.10.5
        ],
        head = document.querySelector('head');

    // 循环加载类库
    for (var i = 0, j = scripts.length; i < j; i++) {
        var script = document.createElement('script');
        script.src = scripts[i];
        head.appendChild(script);
    }
})(document);
