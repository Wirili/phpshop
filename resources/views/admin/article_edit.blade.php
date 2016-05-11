@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="">管理中心</a></li>
    <li><a href="{{url('admin/article/index')}}">文章列表</a></li>
    <li class="active">文章编辑</li>
</ol>
<div class="panel panel-default">
    <div class="panel-body">
        <div style="padding: 5px;">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/article/save') }}">
                {!! csrf_field() !!}
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
                            <td width="120"><label for="title">文章标题</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="title" id="title" value="{{$article->title}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">文章分类</label></td>
                            <td>
                                <div class="col-md-4">
                                    <select id="cat_id" class="form-control input-sm" name="cat_id">
                                        <option value="0">选择类别</option>
                                        @foreach($article_cat as $item)
                                            <option value="{{$item->cat_id}}" @if($item->cat_id==$article->cat_id) selected @endif>{{$item->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="120"><label for="is_open">是否显示</label></td>
                            <td><div class="col-md-4"><input type="checkbox" name="is_open" id="is_open" @if($article->is_open==1) checked @endif value="1"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">文章作者</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="author" id="author" value="{{$article->author}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">作者email</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="author_email" id="author_email" value="{{$article->author_email}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">关键字</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="keywords" id="keywords" value="{{$article->keywords}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">网页描述</label></td>
                            <td><div class="col-md-4"><textarea class="form-control input-sm" rows="3" name="description" id="description" value="{{$article->description}}"></textarea></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="title">外部链接</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="link" id="link" value="{{$article->link}}"></div></td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <!-- 加载编辑器的容器 -->
                    <script id="container" name="contents" style="height: 400px;" type="text/plain">{!! $article->contents !!}</script>

                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function() {
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                        });
                    </script>
                </div>
            </div>
            <div style="margin: 10px 0 0;">
                <input type="hidden" name="article_id" value="{{$article->article_id}}">
                <input type="submit" class="btn btn-primary" value="确定">
                <input type="reset" class="btn btn-default" value="取消">
            </div>
            </form>
        </div>
    </div>
</div>
@endsection