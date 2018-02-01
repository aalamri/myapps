@extends('layouts.app')

@section('content')
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
        <br>
        <br>
        <br>
        <!--Courses-->
        <section id="courses" class="section-padding">
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="header-section text-center">--}}
                        {{--@if(count($courses) > 0)--}}
                            {{--@foreach($courses as $course)--}}
                                {{--<h2>{{$course->name}}</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem--}}
                                    {{--nesciunt--}}
                                    {{--vitae,<br>--}}
                                    {{--maiores, magni dolorum aliquam.</p>--}}
                                {{--<hr class="bottom-line">--}}
                            {{--@endforeach--}}
                            {{--{{$courses->links()}}--}}
                        {{--@else--}}
                            {{--<p>No courses found</p>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
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
                                    <a href="#"></a>
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
