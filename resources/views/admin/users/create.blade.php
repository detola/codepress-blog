@extends('layouts.admin')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">New User</h4>
            <p class="card-description">
              Create user form 
            </p>
            {{-- <form class="forms-sample"> --}}
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files'=>true, 'class'=>'forms-sample']) !!}

              <div class="form-group">
                {!! Form::label('name', 'Full Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Names']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('email', 'Email address') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', [''=>'Choose user role'] + $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('is_active', 'Status') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
            </div>
              <div class="form-group">
                {!! Form::label('photo_id', 'Select File') !!}
                <div class="input-group col-xs-12">
                {!! Form::file('photo_id', ['class'=>'form-control file-upload-info', 'placeholder'=>'Upload Image']) !!}
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="file">Choose file</button>
                  </span>
                </div>
              </div>
             <!--  <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
              </div> -->
              {!! Form::submit('Create User', ['class'=>'btn btn-success mr-2']) !!}
              <button class="btn btn-light">Cancel</button>
              {!! Form::close() !!}
            {{-- </form> --}}
          </div>
        </div>
      </div>
    
@endsection