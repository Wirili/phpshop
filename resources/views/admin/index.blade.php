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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">

<div class="main-top">
    <h3 class="logo">后台管理</h3>
    <ul class="notification-menu">
        <li><a class="dropdown-toggle" href="{{ url('admin/logout') }}">注销</a></li>
        <li><a class="dropdown-toggle" href="javascript:void(0);">{{ Auth::guard('admin')->user()->name }}</a></li>
    </ul>
</div>
<div class="main-left">
    <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="menu-list nav-stacked">
            <a href="javascript:void(0);"><i class="fa fa-home"></i><span>商品管理</span><b class="fa fa-angle-down"></b></a>
            <ul class="sub-menu-list">
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
                <li><a href="" target="mainframe">添加商品</a></li>
            </ul>
        </li>
        <li class="menu-list">
            <a href="javascript:void(0);"><i class="fa fa-home"></i><span>文章管理</span><b class="fa fa-angle-down"></b></a>
            <ul class="sub-menu-list">
                <li><a href="" target="mainframe">添加文章</a></li>
                <li><a href="{{URL::asset('admin/article/index')}}" target="mainframe">文章列表</a></li>
                <li><a href="" target="mainframe">文章类别</a></li>
            </ul>
        </li>
        <li class="menu-list"><a href="javascript:void(0);"><i class="fa fa-home"></i><span>商品管理</span></a></li>
        <li class="menu-list"><a href="javascript:void(0);"><i class="fa fa-home"></i><span>商品管理</span></a></li>
    </ul>
</div>
<div class="main-container">
    <iframe id="mainframe" name="mainframe" src="" frameborder="0"></iframe>
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

<!-- JavaScripts -->
<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
