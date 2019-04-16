@extends('layouts.admin')

@section('content')

@include('includes.session-message')

@include('includes.tinyeditor')

@include('includes.form-errors')


<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">New Post</h4>

            {!! Form::open(['method'=>'POST', 'action'=> 'PostsController@store', 'files'=>true,
            'class'=>'forms-sample']) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Post Title']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', [''=>'Select category'] + $category, null, ['class'=>'form-control'])
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Select File') !!}
                <div class="input-group col-xs-12">
                    {!! Form::file('photo_id', ['class'=>'form-control file-upload-info', 'placeholder'=>'Upload
                    Image']) !!}
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="file">Choose file</button>
                    </span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('excerpt', 'Excerpt') !!}
                {!! Form::text('excerpt', null, ['class'=>'form-control', 'placeholder'=>'Excerpt']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>2, 'placeholder'=>'Post body...' ])
                !!}
            </div>



            {!! Form::submit('Create Post', ['class'=>'btn btn-success mr-2']) !!}

            <button class="btn btn-light">Cancel</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection