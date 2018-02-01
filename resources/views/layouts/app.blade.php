<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<!-- Custom styles for this template -->
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        @include('inc.messages')
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/courses') }}" >Men<span>tor</span></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if(Auth::guest())--}}
                    {{--<a class="navbar-brand" href="{{ url('/courses') }}">--}}
                        {{--Home--}}
                    {{--</a>--}}
                {{--@else--}}
                    {{--<a class="navbar-brand" href="{{ url('/courses') }}">--}}
                        {{--Home--}}
                    {{--</a>--}}
                {{--@endif--}}
            {{--</ul>--}}
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#organisations">Organisations</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> @lang('file.Login')</a></li>
                    <li><a href="{{ url('/register') }}">@lang('file.Register')</a></li>
                @else

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           style="position:relative; padding-left:50px;">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                 style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>@lang('file.Profile')
                                </a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>@lang('file.Logout')
                                </a></li>
                            <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa fa-book"> </i>My Courses</a></li>

                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <h2 class="text-dec">Trust & Quality</h2>
                    </div>
                    <div class="intro-para text-center quote">
                        <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
                        <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p>
                        <a href="#footer" class="btn get-quote">GET A QUOTE</a>
                    </div>
                    <a href="#courses" class="mouse-hover">
                        <div class="mouse"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Banner-->

@yield('content')

<!-- JavaScripts -->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('article-ckeditor');</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/jquery.easing.min.js"></script>

@yield('script')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
