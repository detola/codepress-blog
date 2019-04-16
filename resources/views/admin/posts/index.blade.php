@extends('layouts.admin')

@section('content')

@include('includes.session-message')


<!-- Partials -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Posts</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Comments</th>
                            <th>Post Link</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($posts)

                        @foreach ($posts as $post)

                        <tr>
                            <td>{{$post->id}}</td>
                            <td>
                                <a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a>
                            </td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                            <td><a href="{{$post->comments}}" class="badge badge-info">View Comments <span
                                        class="badge badge-danger">{{count($post->comments)}}</span></a></td>
                            <td><a href="{{route('post', $post->slug)}}">View Post</a></td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach

                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End Partials -->


@endsection