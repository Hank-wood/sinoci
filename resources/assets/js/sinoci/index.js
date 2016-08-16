(function (全局, 节点, 辅助) {

    全局.模块队列 = [];

    节点(function () {
        辅助.each(全局.模块队列, function (模块) {
            new 模块;
        });
    });

})(window, $, _);
