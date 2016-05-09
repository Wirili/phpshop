@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li><a href="#">文章管理</a></li>
</ol>
<div style="padding: 5px;">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">通用信息</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">文章内容</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <table class="table table-hover touch-table">
                <tr>
                    <td width="120"><label for="title">标题</label></td>
                    <td><div class="col-md-4"><input type="text" class="form-control" name="title" id="title"></div></td>
                </tr>
                <tr>
                    <td width="120"><label for="is_open">是否显示</label></td>
                    <td><div class="col-md-4"><input type="text" class="form-control" name="is_open" id="is_open"></div></td>
                </tr>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">文章内容</div>
    </div>
</div>
@endsection