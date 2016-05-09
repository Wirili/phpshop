@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li><a href="#">文章管理</a></li>
    <li class="active">文章列表</li>
</ol>
<table class="table table-bordered table-striped table-hover">
    <tr align="center">
        <th class="text-center">编号</th>
        <th class="text-center">标题</th>
        <th class="text-center">分类</th>
        <th class="text-center">是否显示</th>
        <th class="text-center">添加日期</th>
        <th class="text-center">操作</th>
    </tr>
    @foreach($list as $item)
    <tr align="center">
        <td>{{$item->article_id}}</td>
        <td>{{$item->title}}</td>
        <td>3</td>
        <td>{{$item->is_open}}</td>
        <td>{{$item->add_time}}</td>
        <td>
            <a data-toggle="tooltip" data-placement="bottom" title="编辑" href="{{url('admin/article',['id'=>$item->article_id,'edit'=>'edit'])}}"><i class="fa fa-edit"></i></a>
            <a data-toggle="tooltip" data-placement="bottom" title="移除" href="#"><i class="fa fa-remove"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection