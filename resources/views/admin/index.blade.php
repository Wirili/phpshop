<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>后台管理</title>

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type='text/css'>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type='text/css'>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type='text/css'>
    {{--<link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" type='text/css'>--}}
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type='text/css'>

    <!-- JavaScripts -->
    <script src="{{asset('js/jquery-1.12.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">

<div class="main-top">
    <h3 class="logo text-center"><i class="fa fa-home"></i> 后台管理</h3>
    <ul class="notification-menu">
        <li><a class="dropdown-toggle" href="{{ url('admin/logout') }}"><i class="fa fa-sign-out"></i> 注销</a></li>
        <li><a class="dropdown-toggle" href="javascript:void(0);"><i class="fa fa-user"></i> {{ Auth::guard('admin')->user()->name }}</a></li>
    </ul>
</div>
<div class="main-left">
    <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="menu-list nav-stacked">
            <a href="javascript:void(0);"><i class="fa fa-file-text-o"></i><span>商品管理</span><b class="fa fa-angle-down"></b></a>
            <ul class="sub-menu-list">
                <li><a href="{{URL::action('Admin\GoodsController@index')}}" target="mainframe">商品列表</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="{{url('admin/category/index')}}" target="mainframe">商品分类</a></li>
                <li><a href="" target="mainframe">用户评论</a></li>
                <li><a href="" target="mainframe">商品品牌</a></li>
                <li><a href="" target="mainframe">商品类型</a></li>
                <li><a href="" target="mainframe">商品回收站</a></li>
            </ul>
        </li>
        <li class="menu-list">
            <a href="javascript:void(0);"><i class="fa fa-wpforms"></i><span>文章管理</span><b class="fa fa-angle-down"></b></a>
            <ul class="sub-menu-list">
                <li><a href="{{url('admin/article/create')}}" target="mainframe">添加文章</a></li>
                <li><a href="{{url('admin/article/index')}}" target="mainframe">文章列表</a></li>
                <li><a href="{{url('admin/article_cat/index')}}" target="mainframe">文章类别</a></li>
            </ul>
        </li>
        <li class="menu-list">
            <a href="javascript:void(0);"><i class="fa fa-users"></i><span>权限管理</span><b class="fa fa-angle-down"></b></a>
            <ul class="sub-menu-list">
                <li><a href="{{url('admin/admin/index')}}" target="mainframe">管理员列表</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="main-container">
    <iframe id="mainframe" name="mainframe" src="{{url('admin/welcome')}}" frameborder="0" scrolling="yes" ></iframe>
</div>

{{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}

            {{--<!-- Collapsed Hamburger -->--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}

            {{--<!-- Branding Image -->--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--Laravel--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
            {{--</ul>--}}

            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@if (Auth::guard('admin')->guest())--}}
                    {{--<li><a href="{{ url('admin/login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ url('admin/register') }}">Register</a></li>--}}
                {{--@else--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                            {{--{{ Auth::guard('admin')->user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

@yield('content')
</body>
</html>
