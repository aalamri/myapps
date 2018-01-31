@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Course</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => 'CourseController@save', 'method' => 'POST','enctype' =>'multipart/form-data']) !!}
                        {!! csrf_field() !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'description'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}
                        </div>
                        <div class="form-group">
                            <label for="cityname">City</label>
                            <select class="form-control" name="city" id="city" data-parsley-required="true">
                                @foreach ($city as $sn)
                                    {
                                    <option value="{{ $sn->name }}">{{ $sn->name }}</option>
                                    }
                                @endforeach
                            </select>
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
                        <div class="form-group">
                             {{Form::file('avatar')}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
