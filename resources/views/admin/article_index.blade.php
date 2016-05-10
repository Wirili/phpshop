@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li><a href="#">文章管理</a></li>
    <li class="active">文章列表</li>
</ol>
<table id="dt" class="table table-bordered table-striped table-hover">
    <thead>
    <tr align="center">
        <th class="text-center">编号</th>
        <th class="text-center">标题</th>
        <th class="text-center">分类</th>
        <th class="text-center">是否显示</th>
        <th class="text-center">添加日期</th>
        <th class="text-center">操作</th>
    </tr>
    </thead>
    {{--<tbody>--}}
    {{--@foreach($list as $item)--}}
    {{--<tr align="center">--}}
        {{--<td>{{$item->article_id}}</td>--}}
        {{--<td>{{$item->title}}</td>--}}
        {{--<td>3</td>--}}
        {{--<td>{{$item->is_open}}</td>--}}
        {{--<td>{{$item->add_time}}</td>--}}
        {{--<td>--}}
            {{--<a data-toggle="tooltip" data-placement="bottom" title="编辑" href="{{url('admin/article',['id'=>$item->article_id,'edit'=>'edit'])}}"><i class="fa fa-edit"></i></a>--}}
            {{--<a data-toggle="tooltip" data-placement="bottom" title="移除" href="#"><i class="fa fa-remove"></i></a>--}}
        {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
</table>
<script>
    $(function(){
        $('#dt').DataTable({
            "pagingType":"full_numbers",
            "pageLength":10,
            "autoWidth":false,
            "processing":true,
            "serverSide":true,
            "ajax":{
                "url":"{{url('admin/article/ajax')}}"
            },
            "columns":[
                {"data":'article_id'},
                {"data":'title'},
                {"data":'cat_id'},
                {"data":'is_open'},
                {"data":'add_time'},
            ],
            "order":[[2,"desc"]]
        });
    });
</script>
@endsection