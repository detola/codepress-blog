@extends('layouts.admin')

@section('content')

    @include('includes.session-message')

    <h1>Category Index</h1>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::open(['method'=>'POST', 'action'=> 'CategoriesController@store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Category Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}
        </div>

        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                </tr>

                @if($categories)

                    @foreach($categories as $category)

                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>{{$category->updated_at->diffForHumans()}}</td>
                        </tr>

                    @endforeach

                @endif
            </table>
        </div>
    </div>

@endsection