@extends('layouts.admin')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

<h3>Upload Gallery Files</h3>

{!! Form::open(['method'=>'POST', 'action'=> 'GalleriesController@store', 'class'=>'dropzone']) !!}


{!! Form::close() !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

@endsection