@extends('layouts.app')

@section('content')
    <h1>Create Course</h1>
    {!! Form::open(['action' => 'CourseController@save', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('location', 'Location')}}
        {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}
    </div>
    <div class="form-group">
        {{Form::label('trainerName', 'Trainer Name')}}
        {{Form::text('trainerName', '', ['class' => 'form-control', 'placeholder' => 'Trainer Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('Male', 'Male')}}
        {{Form::checkbox('Male', 'male')}}
        {{Form::label('Female', 'female')}}
        {{Form::checkbox('Female', 'female')}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
        {{Form::label('start', 'Stat Date')}}
        {{Form::date('start', '', ['class' => 'form-control', 'placeholder' => 'Stat Date'])}}
    </div>
    <div class="form-group">
        {{Form::label('end', 'End Date')}}
        {{Form::date('end', '', ['class' => 'form-control', 'placeholder' => 'End Date'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
