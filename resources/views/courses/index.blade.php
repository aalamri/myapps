@extends('layouts.app')

@section('content')
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
    <div class="container">

        <!--Cta-->
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-2-form text-center">
                    {!! Form::open(['action' => ['CourseController@search'], 'class'=>'form navbar-form navbar-right searchform']) !!}
                    {!! Form::text('search', null,
                                           array('required',
                                                'class'=>'search',
                                                'placeholder'=>'Search for a course...')) !!}
                    {!! Form::submit('Search',
                                               array('class'=>'cta-2-form-submit-btn')) !!}
                </div>
            </div>
        </div>
        <!-- Page Features -->
        <!--Feature-->
        <section id="feature" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="header-section text-center">
                        <h2>Features</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                        <hr class="bottom-line">
                    </div>
                    <div class="feature-info">
                        <div class="fea">
                            <div class="col-md-4">
                                <div class="heading pull-right">
                                    <h4>Latest Technologies</h4>
                                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                                </div>
                                <div class="fea-img pull-left">
                                    <i class="fa fa-css3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="fea">
                            <div class="col-md-4">
                                <div class="heading pull-right">
                                    <h4>Toons Background</h4>
                                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                                </div>
                                <div class="fea-img pull-left">
                                    <i class="fa fa-drupal"></i>
                                </div>
                            </div>
                        </div>
                        <div class="fea">
                            <div class="col-md-4">
                                <div class="heading pull-right">
                                    <h4>Award Winning Design</h4>
                                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                                </div>
                                <div class="fea-img pull-left">
                                    <i class="fa fa-trophy"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faculity member-->
        <section id="faculity-member" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="header-section text-center">
                        <h2>Meet Our Faculty Member</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                        <hr class="bottom-line">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="pm-staff-profile-container">
                            <div class="pm-staff-profile-image-wrapper text-center">
                                <div class="pm-staff-profile-image">
                                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                                </div>
                            </div>
                            <div class="pm-staff-profile-details text-center">
                                <p class="pm-staff-profile-name">Bryan Johnson</p>
                                <p class="pm-staff-profile-title">Lead Software Engineer</p>

                                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="pm-staff-profile-container">
                            <div class="pm-staff-profile-image-wrapper text-center">
                                <div class="pm-staff-profile-image">
                                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                                </div>
                            </div>
                            <div class="pm-staff-profile-details text-center">
                                <p class="pm-staff-profile-name">Bryan Johnson</p>
                                <p class="pm-staff-profile-title">Lead Software Engineer</p>

                                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="pm-staff-profile-container">
                            <div class="pm-staff-profile-image-wrapper text-center">
                                <div class="pm-staff-profile-image">
                                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                                </div>
                            </div>
                            <div class="pm-staff-profile-details text-center">
                                <p class="pm-staff-profile-name">Bryan Johnson</p>
                                <p class="pm-staff-profile-title">Lead Software Engineer</p>

                                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Faculity member-->
        <br>
        <br>
        <br>
        <!--Courses-->
        <section id="courses" class="section-padding">
            <div class="container">
                <div clas="row">
                    @if(count($courses) > 0)
                        @foreach($courses as $course)
                    <div class="col-md-4 col-sm-6 padleft-right">
                                <figure class="imghvr-fold-up">
                                    <img src="/uploads/avatars/{{ $course->avatar }}" class="img-responsive">
                                    <figcaption>
                                        <h3>{{$course->name}}</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam
                                            atque, nostrum
                                            veniam consequatur libero fugiat, similique quis.</p>
                                    </figcaption>
                                    <a href="/courses/{{$course->id}}">{{$course->name}}></a>
                                </figure>
                    </div>
                        @endforeach
                        {{$courses->links()}}
                    @else
                        <p>No courses found</p>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
