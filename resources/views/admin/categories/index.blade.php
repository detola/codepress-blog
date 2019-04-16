@extends('layouts.admin')

@section('content')

@include('includes.session-message')

<h3>Category Page</h3>
<div class="row">
    <div class="col-sm-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Category</h4>
                {!! Form::open(['method'=>'POST', 'action'=> 'CategoriesController@store', 'class'=>'forms-sample']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Category Name') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Category']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-success mr-2']) !!}
                </div>


                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <div class="col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Categories</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Date Created</th>
                                <th>Date Modified</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($categories)

                            @foreach($categories as $category)

                            <tr>
                                <td>{{$category->id}}</td>
                                <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a>
                                </td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>{{$category->updated_at->diffForHumans()}}</td>
                            </tr>

                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection