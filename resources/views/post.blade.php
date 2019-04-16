@extends('layouts.frontpage')

@section('content')

    <div id="post-header" class="page-header">
        <div class="page-header-bg" style="background-image: url('{{$post->photo ? $post->photo->path : null}}');" data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-category">
                        <a href="category.html">{{$post->category ? $post->category->name : 'Uncategorized'}}</a>
                    </div>
                    <h1>{{$post->title}}</h1>
                    <ul class="post-meta">
                        <li><a href="author.html">{{$post->user->name}}</a></li>
                        <li>{{$post->created_at->diffForHumans()}}</li>
                    <li><i class="fa fa-comments"></i> {{count($post->comments)}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post content -->
                <div class="section-row">
                    <h3>{{$post->title}}</h3>
                    <p>{!! $post->body !!}</p>

                    @if($post->excerpt != null)

                    <blockquote class="blockquote">
                        {{$post->excerpt}}
                        <footer class="blockquote-footer">{{$post->user->name}}</footer>
                    </blockquote>

                    @endif
                </div>
                <!-- /post content -->



                <div class="section-row">

                    <!-- Comment Form -->
                    <div class="section-row">
                        <div class="section-title">
                            <h3 class="title">Leave a reply</h3>
                        </div>

                        {!! Form::open(['method'=>'POST', 'action'=> 'CommentsController@store', 'class'=>'post-reply']) !!}

                        <input type="hidden" name="post_id" value="{{$post->id}}">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::textarea('body', null, ['class'=>'input', 'placeholder'=>'Message']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                {!! Form::submit('Submit', ['class'=>'primary-button']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                    <!-- /Comment Form -->

                    <!-- post comments -->
                    @if($post->comments)

                    <div class="section-title">
                        <h3 class="title">{{count($post->comments)}} Comments</h3>
                    </div>

                    @foreach($post->comments as $comment)

                    <div class="post-comments">
                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{$comment->photo ? $comment->photo->path : '/images/default.png'}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>{{$comment->author}}</h4>
                                    <span class="time">{{$comment->created_at->diffForHumans()}}</span>
                                </div>
                                <p>{{$comment->body}}</p>






                                <!-- Replies -->
                                @if($comment->replies)
                                <div class="media media-author">
                                    @foreach($comment->replies as $reply)
                                        <div class="post-comments">
                                    <div class="media-left">
                                        <img class="media-object" src="{{$reply->photo ? $reply->photo->path : '/images/default.png'}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>{{$reply->author}}</h4>
                                            <span class="time">{{$reply->created_at->diffForHumans()}}</span>
                                        </div>
                                        <p>{{$reply->body}}</p>




                                    </div>
                                                </div>
                                    @endforeach

                                        {!! Form::open(['method'=>'POST', 'action'=> 'CommentRepliesController@store', 'class'=>'post-reply']) !!}

                                        <input type="hidden" name="comment_id" value="{{$comment->id}}">


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {!! Form::text('body', null, ['class'=>'input', 'placeholder'=>'Reply']) !!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::submit('Reply', ['class'=>'reply']) !!}
                                            </div>
                                        </div>

                                        {!! Form::close() !!}
                                    </div>
                                </div>

                            @endif


                                <!-- /comment -->
                            </div>
                        </div>
                        <!-- /comment -->


                    </div>
                    @endforeach
                </div>
                @endif
                <!-- /post comments -->

            </div>



            <div class="col-md-4">
                <!-- ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-3.jpg" alt="">
                    </a>
                </div>
                <!-- /ad widget -->


                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    @foreach ($categories as $category)
                    <div class="category-widget">
                        <ul>
                            <li><a href="#">{{$category->name}}</a></li>
                        </ul>
                    </div>
                    @endforeach
                    
                </div>
                <!-- /category widget -->

               
                <!-- Ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /Ad widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection
