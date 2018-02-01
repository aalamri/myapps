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
            <a class="navbar-brand" href="{{ url('/courses') }}" >Cour<span>ses</span></a>
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
                    <li><a href="#faculity-member">Trainer</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#contact">Contact us</a></li>
                    <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> @lang('file.Login')</a></li>
                    <li><a href="{{ url('/register') }}">@lang('file.Register')</a></li>
                @else
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#organisations">Organisations</a></li>
                    <li><a href="{{ url('/courses') }}">Courses</a></li>
                    <li><a href="#pricing">Pricing</a></li>
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
@yield('content')
<!--Contact-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                        <span aria-hidden="true" class="fa fa-envelope-o"></span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
<!--/ Contact-->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">

        <h3>Start Your Free Trial Now!</h3>
        <!-- End newsletter-form -->
        <ul class="social-links">
            <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        ©2016 Mentor Theme. All rights reserved
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
        </div>
    </div>
</footer>
<!--/ Footer-->
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
<script src="/contactform/contactform.js"></script>
@yield('script')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
