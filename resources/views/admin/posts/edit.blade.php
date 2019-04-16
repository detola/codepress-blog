@extends('layouts.admin')

@section('content')



@include('includes.form-errors')

@include('includes.tinyeditor')

<h4>Edit Post</h4>

<div class="row">


    <div class="col-md-5 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <img src="{{$post->photo ? $post->photo->path : '/images/placeholder.png'}}" alt=""
                    class="img-responsive img-thumbnail">
            </div>
        </div>

    </div>
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Post Form</h4>

                {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['PostsController@update', $post->id],
                'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Category') !!}
                    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id', 'Select File') !!}
                    <div class="input-group col-xs-12">
                        {!! Form::file('photo_id', ['class'=>'form-control file-upload-info', 'placeholder'=>'Replace
                        Image']) !!}
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="file">Choose file</button>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('excerpt', 'Excerpt:') !!}
                    {!! Form::text('excerpt', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                </div>


                <div class="row form-group">
                    {!! Form::submit('Update Post', ['class'=>'btn btn-success mr-2']) !!}


                    {!! Form::close() !!}

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['PostsController@destroy', $post->id]]) !!}

                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    <!-- content-wrapper ends -->
</div>






@endsection