@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="">{{trans('sys.home')}}</a></li>
    <li><a href="{{url('admin/article/index')}}">{{trans('article.list')}}</a></li>
    <li class="active">{{trans('article.edit')}}</li>
</ol>
<div class="panel panel-default">
    <div class="panel-body">
        <div style="padding: 5px;">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/article/save') }}">
                {!! csrf_field() !!}
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{trans('sys.tab_main')}}</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{trans('article.contents')}}</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <table class="table table-hover touch-table">
                        <tr>
                            <td width="120"><label for="title">{{trans('article.title')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="title" id="title" value="{{$article->title}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="cat_id">{{trans('article.cat_id')}}</label></td>
                            <td>
                                <div class="col-md-4">
                                    <select id="cat_id" class="form-control input-sm" name="cat_id">
                                        <option value="0">{{trans('article.pls')}}</option>
                                        @foreach($article_cat as $item)
                                            <option value="{{$item->cat_id}}" @if($item->cat_id==$article->cat_id) selected @endif>{{$item->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="120"><label for="is_open">{{trans('article.is_open')}}</label></td>
                            <td><div class="col-md-4"><input type="checkbox" name="is_open" id="is_open" @if($article->is_open==1) checked @endif value="1"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="author">{{trans('article.author')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="author" id="author" value="{{$article->author}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="author_email">{{trans('article.author_email')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="author_email" id="author_email" value="{{$article->author_email}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="keywords">{{trans('article.keywords')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="keywords" id="keywords" value="{{$article->keywords}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="description">{{trans('article.description')}}</label></td>
                            <td><div class="col-md-4"><textarea class="form-control input-sm" rows="3" name="description" id="description" value="{{$article->description}}"></textarea></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="link">{{trans('article.link')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="link" id="link" value="{{$article->link}}"></div></td>
                        </tr>
                        <tr>
                            <td width="120"><label for="file_url">{{trans('article.link')}}</label></td>
                            <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="file_url" id="file_url" value="{{$article->file_url}}"></div></td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <!-- 加载编辑器的容器 -->
                    <script id="container" name="contents" style="height: 400px; padding: 8px 0;" type="text/plain">{!! $article->contents !!}</script>

                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function() {
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                        });
                    </script>
                </div>
            </div>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div style="margin: 10px 0 0;">
                <input type="hidden" name="article_id" value="{{$article->article_id}}">
                <input type="submit" class="btn btn-primary" value="{{trans('sys.submit')}}">
                <input type="reset" class="btn btn-default" value="{{trans('sys.reset')}}">
            </div>
            </form>
        </div>
    </div>
</div>
@endsection