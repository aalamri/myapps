@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Languages</div>

                    <div class="panel-body">
                        <form action="language" method="post">
                            <select name="locale">
                                <option value="en">English</option>
                                <option value="ar" {{ Lang::locale() === 'ar' ? ' selected' : ''}}>Arabic</option>
                            </select>
                            {{csrf_field() }}
                            <input type="submit" value="Submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                        <div class="panel-body">
                            <a href="/courses/create" class="btn btn-primary">Create a Course</a>
                            <h3> Your Courses</h3>
                            @if(count($courses) > 0)
                                <div class="table table-striped table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Trainer Name</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->location}}</td>
                                                <td>{{$course->trainer_name}}</td>
                                                <td>{{$course->price}}</td>
                                                @if(!Auth::guest())
                                                    @if(Auth::user()->id == $course->user_id)
                                                        <td><a href="/courses/{{$course->id}}/edit"
                                                               class="btn btn-warning">Edit</a></td>
                                                        <td>
                                                            {!!Form::open(['action' => ['CourseController@delete', $course->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                            {!! csrf_field() !!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                            {!!Form::close()!!}
                                                        </td>
                                                    @endif
                                                @endif
                                            </tr>
                                        @endforeach
                                    </table>
                                    @else
                                        <p>You have no Courses</p>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
