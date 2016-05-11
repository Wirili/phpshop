@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="">{{trans('sys.home')}}</a></li>
    <li><a href="{{url('admin/article_cat/index')}}">{{trans('article.cat.list')}}</a></li>
    <li class="active">{{trans('article.cat.edit')}}</li>
</ol>
<div class="panel panel-default">
    <div class="panel-body">
        <div style="padding: 5px;">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/article_cat/save') }}">
                {!! csrf_field() !!}
                <table class="table table-hover touch-table">
                    <tr>
                        <td width="120"><label for="cat_name">{{trans('article.cat.name')}}</label></td>
                        <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="cat_name" id="cat_name" value="{{$cat->cat_name}}"></div></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="parent_id">{{trans('article.cat.parent')}}</label></td>
                        <td>
                            <div class="col-md-4">
                                <select id="parent_id" class="form-control input-sm" name="parent_id">
                                    <option value="0">{{trans('article.cat.topcat')}}</option>
                                    @foreach($article_cat as $item)
                                        <option value="{{$item->cat_id}}" @if($item->cat_id==$cat->parent_id) selected @endif>{{$item->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="120"><label for="is_open">{{trans('article.cat.show_in_nav')}}</label></td>
                        <td><div class="col-md-4"><input type="checkbox" name="show_in_nav" id="show_in_nav" @if($cat->show_in_nav==1) checked @endif value="1"></div></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="sort_order">{{trans('sys.sort')}}</label></td>
                        <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="sort_order" id="sort_order" value="{{$cat->sort_order}}"></div></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="keywords">{{trans('article.keywords')}}</label></td>
                        <td><div class="col-md-4"><input type="text" class="form-control input-sm" name="keywords" id="keywords" value="{{$cat->keywords}}"></div></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="cat_desc">{{trans('article.cat.desc')}}</label></td>
                        <td><div class="col-md-4"><textarea class="form-control input-sm" rows="3" name="cat_desc" id="cat_desc" value="{{$cat->cat_desc}}"></textarea></div></td>
                    </tr>
                </table>
                <div style="margin: 10px 0 0;">
                    <input type="hidden" name="cat_id" value="{{$cat->cat_id}}">
                    <input type="submit" class="btn btn-primary" value="{{trans('sys.submit')}}">
                    <input type="reset" class="btn btn-default" value="{{trans('sys.reset')}}">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection