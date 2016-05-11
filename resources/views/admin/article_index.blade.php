@extends('admin.layouts.index')

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">管理中心</a></li>
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
        $(function () {
            var table = $('#dt').DataTable({
                pagingType: "full_numbers",
                pageLength: 10,
                autoWidth: false,
                processing: true,
                serverSide: true,
                lengthChange: true,
                searching: false,
                stateSave: true,
                ajax: {
                    url: "{{url('admin/article/ajax')}}"
                },
                columns: [
                    {data: 'article_id'},
                    {data: 'title'},
                    {
                        data: 'article_cat.cat_name',
                        orderable: false
                    },
                    {
                        data: 'is_open',
                        className: 'text-center',
                        render:function(data,type,row){
                            if(data==1){
                                data="<i class='fa fa-check text-success'></i>";
                            }else{
                                data="<i class='fa fa-remove text-danger'></i>"
                            }
                            return data;
                        }
                    },
                    {data: 'add_time'},
                    {
                        data: 'article_id',
                        className: 'text-center',
                        orderable: false,
                        render: function (data, type, row) {
                            data = "<a href='/admin/article/" + data + "/edit'><i class='fa fa-edit'></i></a>"
                                    + "<a href='/admin/article/" + data + "/del' class='text-danger'><i class='fa fa-remove'></i></a>";
                            return data;
                        }
                    }
                ],
                order: [[0, "desc"]],
                buttons:{
                    buttons:[
                        {
                            text:'adfs',
                            title:'dfasdf'
                        }
                    ]
                }
            });

//        table.button().add(0,{
//            action:function(e,dt,button,config){
//
//            },
//            text:'新增'
//        });
        });
    </script>
@endsection