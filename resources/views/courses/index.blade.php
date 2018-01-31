@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">A Warm Welcome!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
        </header>
        <!-- Page Features -->
        <div class="row text-center">
            @if(count($courses) > 0)
                @foreach($courses as $course)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="/uploads/avatars/{{ $course->avatar }}"
                                 style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                            <div class="card-body">
                                <h4><a href="/courses/{{$course->id}}">{{$course->name}}</a></h4>
                                <p>Duration: {{$course->duration}}</p>
                            </div>
                            <div class="card-footer">
                                <a> By: {{$course->user->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$courses->links()}}
            @else
                <p>No courses found</p>
            @endif
        </div>

        {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Welcome to Courses</div>--}}

        {{--@if(count($courses) > 0)--}}
        {{--@foreach($courses as $course)--}}
        {{--<div class="well">--}}
        {{--<h3><a href="/courses/{{$course->id}}">{{$course->name}}</a></h3>--}}
        {{--<small>Duration: {{$course->duration}}</small>--}}
        {{--<br>--}}
        {{--<small>By: {{$course->user->name}}</small>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--{{$courses->links()}}--}}
        {{--@else--}}
        {{--<p>No courses found</p>--}}
        {{--@endif--}}
        {{--<div class="panel-body">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection
