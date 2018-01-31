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
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" style="background-color: #60ba46; border-color: #60ba46;">
    <div class="container">
        @include('inc.messages')
        <div class="navbar-brand">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->

            {{--<a class="navbar-brand" href="{{ url('/courses') }}" style="color: white;">--}}
            {{--Courses--}}
            {{--</a>--}}

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if(Auth::guest())
                    <a class="navbar-brand" href="{{ url('/courses') }}" style="color: white;">
                        Home
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/courses') }}" style="color: white;">
                        Home
                    </a>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" style="color: white;"> <i
                                    class="fa fa-btn fa-sign-in"></i> @lang('file.Login')</a></li>
                    <li><a href="{{ url('/register') }}" style="color: white;">@lang('file.Register')</a></li>
                    {{--<li><a href="{{ url('/courses/create') }}"  style="color: white;">Create Course</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           style="position:relative; padding-left:50px; color: white;">
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

@yield('script')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
