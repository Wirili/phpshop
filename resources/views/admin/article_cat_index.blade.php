@extends('admin.layouts.index')

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{trans('sys.home')}}</a></li>
        <li class="active">{{trans('article.list')}}</li>
    </ol>
    <table id="dt" class="table table-bordered table-striped table-hover">
        <thead>
        <tr align="center">
            <th class="text-center">{{trans('article.cat.name')}}</th>
            <th class="text-center">{{trans('article.cat.desc')}}</th>
            <th class="text-center">{{trans('sys.sort')}}</th>
            <th class="text-center">{{trans('sys.handle')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cat_list as $item)
        <tr align="center" class="{{$item['level']}} treechange">
        <td class="text-left"><i class="fa fa-minus-square-o" style="margin-left: {{intval($item['level'])*10}}px"></i>{{$item['cat_name']}}</td>
        <td>{{$item['cat_desc']}}</td>
        <td>{{$item['sort_order']}}</td>
        <td>
        <a data-toggle="tooltip" data-placement="bottom" title="{{trans('sys.edit')}}" href="{{url('admin/article_cat',['id'=>$item['cat_id'],'edit'=>'edit'])}}"><i class="fa fa-edit"></i></a>
        <a class="text-danger" data-toggle="tooltip" data-placement="bottom" title="{{trans('sys.del')}}" href="#"><i class="fa fa-remove"></i></a>
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        $(function(){
           $('.treechange').on('click','.fa-minus-square-o',function(a){
               var lvl=parseInt(a.delegateTarget.className);
               $.each($(a.delegateTarget).nextAll(),function(){
                   if(parseInt(this.className)>lvl)
                       $(this).hide();
               });
               $(this).removeClass('fa-minus-square-o');
               $(this).addClass('fa-plus-square-o');
           });
           $('.treechange').on('click','.fa-plus-square-o',function(a,b,c){
               var lvl=parseInt(a.delegateTarget.className);
               $.each($(a.delegateTarget).nextAll(),function(){
                   if(parseInt(this.className)>lvl)
                       $(this).show();
               });
               $(this).addClass('fa-minus-square-o');
               $(this).removeClass('fa-plus-square-o');
           });
        });
    </script>
@endsection