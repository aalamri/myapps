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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
