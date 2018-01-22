@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Details</div>
                    <h1>{{$course->name}}</h1>
                    <img src="/uploads/avatars/{{ $course->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <small>Gender: {{$course->gender}}</small><br>
                    <di>Location:
                        {{$course->location}}
                    </di><br>
                    <di>Trainer Name:
                        {{$course->trainer_name}}
                    </di><br>
                    <di>Price:
                        {{$course->price}}
                    </di><br>
                    <di>Start Date:
                        {{$course->start_date}}
                    </di><br>
                    <di>End Date:
                        {{$course->end_date}}
                    </di><br>
                    <div class="panel-body">
                    </div>
                </div>
                <a href="/courses" class="btn btn-info" role="button">Go Back</a>
            </div>
        </div>
    </div>
@endsection
