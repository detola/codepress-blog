@extends('layouts.admin')

@section('content')
    <h1>Replies</h1>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Author</th>
            <th>E-mail</th>
            <th>Body</th>
            <th>Action</th>
        </tr>

        @if($replies)

            @foreach($replies as $reply)

                <tr>
                    <td>{{$reply->id}}</td>
                    <td>{{$reply->author}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{str_limit($reply->body, 20)}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['CommentRepliesController@destroy', $reply->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete Reply', ['class'=>'btn btn-xs btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach

        @endif

    </table>



@endsection