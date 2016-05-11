@extends('admin.layouts.index')

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{trans('sys.home')}}</a></li>
        <li class="active">{{trans('article.list')}}</li>
    </ol>
    <table id="dt" class="table table-bordered table-striped table-hover">
        <thead>
        <tr align="center">
            <th class="text-center">{{trans('sys.id')}}</th>
            <th class="text-center">{{trans('article.title')}}</th>
            <th class="text-center">{{trans('article.cat_id')}}</th>
            <th class="text-center">{{trans('article.is_open')}}</th>
            <th class="text-center">{{trans('sys.create_time')}}</th>
            <th class="text-center">{{trans('sys.handle')}}</th>
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
            var table = $('#dt').on('draw.dt',function(e, settings){
                $('[data-toggle="tooltip"]').tooltip();
            })
            .DataTable({
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
                            data = "<a href='/admin/article/edit/" + data + "' data-toggle='tooltip' data-placement='bottom' title='{{ trans('sys.edit') }}'><i class='fa fa-edit'></i></a>"
                                    + "<a href='/admin/article/del/" + data + "' class='text-danger' data-toggle='tooltip' data-placement='bottom' title='{{ trans('sys.del') }}'><i class='fa fa-remove'></i></a>";
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
        });
    </script>
@endsection