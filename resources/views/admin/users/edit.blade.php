@extends('layouts.admin')

@section('content')

@include('includes.session-message')

<div class="row">

  <div class="col-md-5 d-flex align-items-stretch">
    <div class="row flex-grow">
      <div class="card">
        <div class="card-img">
          <div>
            <img src="{{$user->photo ? $user->photo->path : '/images/default.png'}}" alt=""
              class="img-responsive img-thumbnail">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input size</h4>
        <p class="card-description">
          This is the default bootstrap form layout
        </p>

        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true
        , 'class'=>'forms-sample']) !!}
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
          {!! Form::label('role_id', 'Role:') !!}
          {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('is_active', 'Status:') !!}
          {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
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
        {{-- <button type="submit" class="btn btn-success mr-2">Update User</button>
                <button class="btn btn-danger">Delete User</button> --}}

        <div class="form-group row">
          {!! Form::submit('Update User', ['class'=>'btn btn-success mr-2']) !!}


          {!! Form::close() !!}

          {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

          {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


  <!-- content-wrapper ends -->
</div>

@endsection