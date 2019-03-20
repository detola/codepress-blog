@extends('layouts.admin')

@section('content')

    @include('includes.session-message')

    <h1>Comments</h1>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Author</th>
            <th>E-mail</th>
            <th>Body</th>
            <th>Post</th>
            <th>Replies</th>
            <th>Status</th>
            <th></th>
        </tr>

        @if($comments)

            @foreach($comments as $comment)

                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{str_limit($comment->body, 10)}}</td>
                    <td><a href="{{route('post', $comment->post->id)}}" class="badge badge-info">View Post</a>
                    <td><a href="{{route('admin.comment.replies.index', $comment->id)}}">View Replies</a></td>
                    <td></td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['CommentsController@destroy', $comment->id]]) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete Comment', ['class'=>'btn btn-danger']) !!}
                            </div>

                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach

        @endif

    </table>


@endsection