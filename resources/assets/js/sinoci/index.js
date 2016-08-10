(function (window) {

    // 模块队列
    window.modules = [];

    // 类库列表
    var scripts = {
            jquery: {
                src: '/assets/js/jquery-1.11.1.min.js',
                onload: function () {
                    getScript([ 'bootstrap', 'typeahead']);
                }
            },
            bootstrap: {
                src: '/assets/js/bootstrap.min.js'
            },
            typeahead: {
                src: '/assets/js/typeahead.min.js'
            },
            underscore: {
                src: '/assets/underscore.js',
                onload: function () {
                    _.forEach(window.modules, function (Module) {
                        window.addEventListener('load', function () {
                            new Module;
                        });
                    })
                }
            }
        };

    // 初始加载
    getScript([ 'jquery', 'underscore' ]);

    // 加载类库
    function getScript (target) {

        // 字符串转换为数组
        if (typeof target === 'string') {
            return getScript([ target ]);
        }

        // 循环添加脚本
        for (var i = 0, j = target.length; i < j; i++) {
            var script = document.createElement('script');
            for (var k in scripts[target[i]]) {
                script[k] = scripts[target[i]][k];
            }
            document.head.appendChild(script);
        }
    }
})(window);
