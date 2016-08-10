<sinoci-content-list>
    <div class="panel panel-body">
        <div class="wy-alert wy-alert-neutral">共 300 条记录, 每页 50条, 当前第 2 页</div>
        <div class="table-responsive">
            <table class="table table-hover wy-table-bordered-all">
                <tr>
                    <th>编号</th>
                    <th>IP</th>
                    <th>接入链接</th>
                </tr>
                <tr>
                    <td class="wy-text-warning">
                        Baldur's Gate II
                    </td>
                    <td class="wy-text-danger">
                        Bioware
                    </td>
                    <td class="wy-text-success">
                        Boo has a space hamster. Imoen whines a bunch.
                    </td>
                </tr>
                <tr>
                    <td>
                        Icewind Dale II
                    </td>
                    <td>
                        Black Isle
                    </td>
                    <td>
                        Fly around on an airship, then kill tons of ice monsters.
                    </td>
                </tr>
                <tr>
                    <td>
                        Temple of Elemental Evil
                    </td>
                    <td>
                        Trokia
                    </td>
                    <td>
                        Turn based! Do everything 10 times slower.
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel panel-body">
        <ul class="pagination">
            <li class="disabled"><a><span>«</span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a>2</a></li>
            <li><a>3</a></li>
            <li><a>4</a></li>
            <li><a>5</a></li>
            <li><a><span>»</span></a></li>
        </ul>
    </div>
</sinoci-content-list>

@section('弹窗.修改')
    <div class="modal fade" id="修改">
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