<sinoci-content-head>
    <div class="panel panel-body">
        <button type="button" class="btn btn-neutral" data-toggle="modal" data-target="#添加" data-backdrop="static"><i class="fa fa-plus"></i> 添加</button>
        <form class="form-inline">
            <select class="form-control">
                <option>你好</option>
                <option>我好</option>
                <option>大家好</option>
            </select>
            <div class="input-group">
                <span class="input-group-addon">前缀</span>
                <input class="form-control" type="text">
                <span class="input-group-addon">后缀</span>
            </div>
            <input class="form-control" type="date">
            <input class="form-control" type="text">
            <button type="button" class="btn btn-success">成功</button>
            <button type="button" class="btn btn-danger">警告</button>
            <button type="button" class="btn btn-warning">搜索</button>
        </form>
    </div>
</sinoci-content-head>

@section('弹窗.添加')
    <div class="modal fade" id="添加">
        <div class="modal-dialog modal-sm">
            <div class="modal-header">
                <i class="fa fa-times" data-dismiss="modal"></i>
                <h2>添加</h2>
            </div>
            <div class="modal-content">
                <div class="modal-body">
                    确认删除？
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-neutral" data-dismiss="modal">取消</button>
                <button class="btn btn-success">保存</button>
            </div>
        </div>
    </div>
@endsection
