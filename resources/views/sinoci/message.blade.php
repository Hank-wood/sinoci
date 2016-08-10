<sinoci-message>
    <ul class="wy-tray-container">
        <li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>
    </ul>
</sinoci-message>

<script>
    (function (window) {

        // 定义模块
        var Module = function () {
            this.$ = $('sinoci-message');
            this.init();
        };

        // 初始化
        Module.prototype.init = function () {
            var timer = setInterval(this.alert.bind(this), 1111);
            setTimeout(function () {
                clearInterval(timer);
            }, 11111);
        };

        // 提示消息
        Module.prototype.alert = function () {
            this.$.children('ul').append('<li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>');
        };

        // 添加到队列
        window.modules.push(Module);
    })(window);
</script>