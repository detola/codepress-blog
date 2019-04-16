@extends('layouts.admin')

@section('content')

    {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['CategoriesController@update', $category->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Category Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="row form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-success mr-2']) !!}


            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=> ['CategoriesController@destroy', $category->id]]) !!}

            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>
@endsection
