<sinoci-message>
    <ul class="wy-tray-container">
        <li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>
    </ul>
</sinoci-message>

@section('脚本')
    @parent
    <script>
        (function (全局, 节点, 辅助) {

            var 模块 = function () {
                this.初始化();
            };

            模块.prototype.初始化 = function () {
                this.$根 = 节点('sinoci-message');
                this.$消息容器 = this.$根.children('ul');

                this.添加消息();
            };

            模块.prototype.添加消息 = function () {
                this._定时器 = setInterval(this.弹出消息.bind(this), 1111);

                setTimeout(function () {
                    clearInterval(this._定时器);
                }.bind(this), 11111)
            };

            模块.prototype.弹出消息 = function () {
                this.$消息容器.append('<li><i class="fa fa-info-circle"></i><a>您有新消息</a></li>');
            };

            全局.模块队列.push(模块);
        })(window, $, _);
    </script>
@endsection