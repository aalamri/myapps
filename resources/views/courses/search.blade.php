@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center" style="margin-top: 175px;">

            @if (count($courses) === 0)
                ...sorry no courses found
            @elseif (count($courses) >= 1)
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
            @endif
        </div>
        <a href="/courses" class="btn btn-info" role="button">Go Back</a>
    </div>

@endsection
