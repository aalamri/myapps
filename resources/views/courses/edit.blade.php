@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Course</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => ['CourseController@update', $course->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $course->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', $course->description, ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'description'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', $course->location, ['class' => 'form-control', 'placeholder' => 'Location'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('trainerName', 'Trainer Name')}}
                            {{Form::text('trainerName', $course->trainer_name, ['class' => 'form-control', 'placeholder' => 'Trainer Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', $course->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('start', 'Stat Date')}}
                            {{Form::label('start', $course->start_date)}}
                            {{Form::date('start', $course->start_date, ['class' => 'form-control', 'placeholder' => 'Stat Date'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('end', 'End Date')}}
                            {{Form::label('end', $course->end_date)}}
                            {{Form::date('end', $course->end_date, ['class' => 'form-control', 'placeholder' => 'End Date'])}}
                        </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
