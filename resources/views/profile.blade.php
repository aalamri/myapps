@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h3>{{ $user->name }}'s Profile</h3>
            <br>
            </br>
            <label class="col-md-4 control-label">@lang('file.Email')</label>
            <label class="col-md-4 control-label">{{ $user->email }}</label>
            <br>
            </br>
            <label class="col-md-4 control-label">@lang('file.Phone')</label>
            <label class="col-md-4 control-label">{{ $user->phone }}</label>
            <br></br>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>@lang('file.ProfileImage')</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
