@extends('admin.layouts.index')

@section('content')
<ol class="breadcrumb">
    <li><a href="">{{trans('sys.home')}}</a></li>
    <li><a href="{{url('admin/goods/index')}}">{{trans('goods.list')}}</a></li>
    <li class="active">{{trans('goods.edit')}}</li>
</ol>
<div class="panel panel-default">
    <div class="panel-body">
        <div style="padding: 5px;">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/goods/save') }}">
                {!! csrf_field() !!}
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_main" aria-controls="tab_main" role="tab" data-toggle="tab">{{trans('sys.tab_main')}}</a></li>
                <li role="presentation"><a href="#tab_desc" aria-controls="tab_desc" role="tab" data-toggle="tab">{{trans('goods.tab_desc')}}</a></li>
                <li role="presentation"><a href="#tab_other" aria-controls="tab_other" role="tab" data-toggle="tab">{{trans('goods.tab_other')}}</a></li>
                <li role="presentation"><a href="#tab_gallery" aria-controls="tab_gallery" role="tab" data-toggle="tab">{{trans('goods.tab_gallery')}}</a></li>
                <li role="presentation"><a href="#tab_goods_attr" aria-controls="tab_goods_attr" role="tab" data-toggle="tab">{{trans('goods.tab_goods_attr')}}</a></li>
                <li role="presentation"><a href="#tab_goods_link" aria-controls="tab_goods_link" role="tab" data-toggle="tab">{{trans('goods.tab_goods_link')}}</a></li>
                <li role="presentation"><a href="#tab_goods_group" aria-controls="tab_goods_group" role="tab" data-toggle="tab">{{trans('goods.tab_goods_group')}}</a></li>
                <li role="presentation"><a href="#tab_article_link" aria-controls="tab_article_link" role="tab" data-toggle="tab">{{trans('goods.tab_article_link')}}</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" style="margin-top:8px;">
                <div role="tabpanel" class="tab-pane active" id="tab_main">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="goods_name">{{trans('goods.goods_name')}}</label>
                        <div class="col-md-4"><input type="text" class="form-control input-sm" name="goods_name" id="goods_name" value="{{$goods->goods_name}}"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="goods_sn">{{trans('goods.goods_sn')}}</label>
                        <div class="col-md-4"><input type="text" class="form-control input-sm" name="goods_sn" id="goods_sn" value="{{$goods->goods_sn}}"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cat_id">{{trans('goods.cat_id')}}</label>
                        <div class="col-md-4">
                            <select id="cat_id" class="form-control input-sm" name="cat_id">
                                <option value="0">{{trans('article.pls')}}</option>
                                @foreach($goods_cat as $item)
                                    <option value="{{$item->cat_id}}" @if($item->cat_id==$goods->cat_id) selected @endif>{{$item->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="shop_price">{{trans('goods.shop_price')}}</label>
                        <div class="col-md-4"><input type="text" class="form-control input-sm" name="shop_price" id="shop_price" value="{{$goods->shop_price}}"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="market_price">{{trans('goods.market_price')}}</label>
                        <div class="col-md-4"><input type="text" class="form-control input-sm" name="market_price" id="market_price" value="{{$goods->market_price}}"></div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_desc">
                    <!-- 加载编辑器的容器 -->
                    <script id="container" name="contents" style="height: 400px; padding: 8px 0;" type="text/plain">{!! $goods->contents !!}</script>

                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function() {
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                        });
                    </script>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_other">
                    <div class="form-group">
                        <label class="col-md-2 control-label">{{trans('goods.recommend')}}</label>
                        <div class="col-md-4">
                            <label><input type="checkbox" name="is_hot" id="is_hot" @if($goods->is_hot==1) checked @endif value="1">{{trans('goods.is_hot')}}&nbsp;</label>
                            <label><input type="checkbox" name="is_new" id="is_new" @if($goods->is_new==1) checked @endif value="1">{{trans('goods.is_new')}}&nbsp;</label>
                            <label><input type="checkbox" name="is_best" id="is_best" @if($goods->is_best==1) checked @endif value="1">{{trans('goods.is_best')}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="keywords">{{trans('goods.keywords')}}</label>
                        <div class="col-md-4"><input type="text" class="form-control input-sm" name="keywords" id="keywords" value="{{$goods->keywords}}"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="description">{{trans('goods.description')}}</label>
                        <div class="col-md-4"><textarea class="form-control input-sm" rows="3" name="description" id="description" value="{{$goods->description}}"></textarea></div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_gallery">
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_goods_attr">
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_goods_link">
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_goods_group">
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_article_link">
                </div>
            </div>
            <div style="margin: 10px 0 0;">
                <div class="col-md-2"></div>
                <input type="hidden" name="goods_id" value="{{$goods->goods_id}}">
                <input type="submit" class="btn btn-primary" value="{{trans('sys.submit')}}">
                <input type="reset" class="btn btn-default" value="{{trans('sys.reset')}}">
            </div>
            </form>
        </div>
    </div>
</div>
@endsection