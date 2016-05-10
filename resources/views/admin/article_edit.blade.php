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
        <div role="tabpanel" class="tab-pane" id="profile">
            <!-- 加载编辑器的容器 -->
            <script id="container" name="content" style="height: 400px;" type="text/plain">{{$article->content}}</script>

            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
                ue.ready(function() {
                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                });
            </script>
        </div>
    </div>
</div>
@endsection