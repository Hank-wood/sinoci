<sinoci-message>
    <ul class="wy-tray-container">
        <li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>
    </ul>
</sinoci-message>

<script>
    (function (全局, 节点, 辅助) {

        var 模块 = function () {
            this.初始化();
        };

        模块.prototype.初始化 = function () {
            this.$ = 节点('sinoci-message');
            var timer = setInterval(this.alert.bind(this), 1111);
            setTimeout(function () {
                clearInterval(timer);
            }, 11111);
        };

        模块.prototype.alert = function () {
            this.$.children('ul').append('<li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>');
        };

        全局.模块队列.push(模块);
    })(window, $, _);
</script>