(function (document) {
    // 类库列表
    var scripts = {
            jquery: {
                src: '/assets/js/jquery-1.11.1.min.js',
                onload: function () {
                    getScript([ 'bootstrap', 'typeahead']);
                }
            },
            bootstrap: {
                src: '/assets/js/bootstrap.min.js',
                onload: function () {
                    // 提示框
                    $(document.body).tooltip({
                        selector: '[title]'
                    });
                }
            },
            typeahead: {
                src: '/assets/js/typeahead.min.js'
            },
            underscore: {
                src: '/assets/underscore.js'
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
})(document);
