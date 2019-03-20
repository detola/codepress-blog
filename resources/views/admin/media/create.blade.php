@extends('layouts.admin')


@section('content')

    <h1>Upload Gallery Files</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'GalleriesController@store', 'class'=>'dropzone']) !!}


{!! Form::close() !!}

@endsection