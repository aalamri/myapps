@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome to Courses</div>

                    @if(count($courses) > 0)
                        @foreach($courses as $course)
                            <div class="well">
                                <h3><a href="/courses/{{$course->id}}">{{$course->name}}</a></h3>
                                <small>Duration: {{$course->duration}}</small>
                            </div>
                        @endforeach
                        {{$courses->links()}}
                    @else
                        <p>No courses found</p>
                    @endif
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
