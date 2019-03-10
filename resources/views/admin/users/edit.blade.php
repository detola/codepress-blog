@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    @include('includes.form-errors')

    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->path : '/images/default.png'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Full Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Select File:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}


    </div>





@endsection