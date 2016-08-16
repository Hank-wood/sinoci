<sinoci-navbar>
    <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="87">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a>商户管理</a>
                    <ul class="dropdown-menu">
                        <li class="active"><a>店铺列表</a></li>
                        <li><a>菜系分类</a></li>
                        <li><a>小区地图</a></li>
                        <li><a>客服中心</a></li>
                    </ul>
                </li>
                <li>
                    <a>订单管理<span class="badge"></span></a>
                    <ul class="dropdown-menu">
                        <li><a>管理员下单</a></li>
                        <li><a>距离计算</a></li>
                        <li><a>订单信息<span class="label">1</span></a></li>
                    </ul>
                </li>
                <li>
                    <a>超市管理</a>
                    <ul class="dropdown-menu">
                        <li><a>商品列表</a></li>
                        <li><a>分类列表</a></li>
                        <li><a>参数管理</a></li>
                        <li><a>品牌管理</a></li>
                    </ul>
                </li>
                <li>
                    <a>用户管理</a>
                    <ul class="dropdown-menu">
                        <li><a>用户列表</a></li>
                        <li><a>用户地址列表</a></li>
                        <li><a>管理员列表</a></li>
                        <li><a>客服中心</a></li>
                    </ul>
                </li>
                <li>
                    <a>配送管理</a>
                    <ul class="dropdown-menu">
                        <li><a>跑腿人员管理</a></li>
                        <li><a>跑腿人员资金记录</a></li>
                        <li><a>跑腿人员提现</a></li>
                        <li><a>跑腿后台客服中心</a></li>
                        <li><a>跑腿APP客服中心</a></li>
                    </ul>
                </li>
                <li>
                    <a>系统操作</a>
                    <ul class="dropdown-menu">
                        <li><a>公告管理</a></li>
                        <li><a>系统设置</a></li>
                        <li><a>统计列表</a></li>
                        <li><a>来源统计</a></li>
                        <li><a>搜索关键词统计</a></li>
                        <li><a>快捷答复</a></li>
                        <li><a>广告管理</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a><i class="fa fa-comments" title="消息"></i><span class="badge"></span></a>
                    <ul class="dropdown-menu">
                        <li><a>新订单</a></li>
                        <li><a>新任务</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-question-circle" title="帮助"></i></a></li>
                <li><a><i class="fa fa-power-off" title="关闭"></i></a></li>
            </ul>

            @include('sinoci.message')
        </div>
    </nav>
</sinoci-navbar>

<script>
    (function (全局, 节点, 辅助) {

        var 模块 = function () {
            this.$ = $('sinoci-navbar');
            this.初始化();
        };

        模块.prototype.初始化 = function () {
            this.$.find('[title]').tooltip();
        };

        全局.模块队列.push(模块);
    })(window, $, _);
</script>