@extends('layouts.admin')

@section('content')

@include('includes.session-message')

<!-- Partials -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Comments</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
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
                    </thead>
                    <tbody>

                        @if($comments)

                        @foreach($comments as $comment)

                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->author}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{str_limit($comment->body, 15)}}</td>
                            <td><a href="{{route('post', $comment->post->id)}}" class="badge badge-info">View Post</a>
                            <td><a href="{{route('admin.comment.replies.index', $comment->id)}}">View Replies</a></td>
                            <td></td>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['CommentsController@destroy',
                                $comment->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete Comment', ['class'=>'btn btn-danger']) !!}
                                </div>

                                {!! Form::close() !!}

                            </td>
                        </tr>

                        @endforeach

                        @else
                        {{'No Comments'}}

                        @endif

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@endsection