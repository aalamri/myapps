@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Details</div>
                    <h1>{{$course->name}}</h1>
                    <img src="/uploads/avatars/{{ $course->avatar }}"
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <small>Gender: {{$course->gender}}</small>
                    <br>
                    <di>Location:
                        {{$course->location}}
                    </di>
                    <br>
                    <di>Trainer Name:
                        {{$course->trainer_name}}
                    </di>
                    <br>
                    <di>Description:
                        {{strip_tags($course->description)}}
                    </di>
                    <br>
                    <di>Price:
                        {{$course->price}}
                    </di>
                    <br>
                    <di>Start Date:
                        {{$course->start_date}}
                    </di>
                    <br>
                    <di>End Date:
                        {{$course->end_date}}
                    </di>
                    <br>
                    <div class="panel-body">
                        {{--<hr>--}}
                        {{--{!!Form::open(['action' => ['CourseController@delete', $course->id], 'method' => 'POST', 'class' => 'pull-right'])!!}--}}
                        {{--{!! csrf_field() !!}--}}
                        {{--{{Form::hidden('_method', 'DELETE')}}--}}
                        {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
                        {{--{!!Form::close()!!}--}}
                        {{--<a href="/courses/{{$course->id}}/edit" class="btn btn-warning" style="float: left;">Edit</a>--}}
                    </div>

                </div>
                <a href="/courses" class="btn btn-info" role="button">Go Back</a>
            </div>
        </div>
    </div>
@endsection
