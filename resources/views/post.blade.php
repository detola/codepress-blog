@extends('layouts.frontpage')

@section('content')

    <div id="post-header" class="page-header">
        {{-- {{dd($post)}} --}}
        {{--<div class="page-header-bg" style="background-image: url('./img/header-1.jpg');" data-stellar-background-ratio="0.5"></div>--}}
        <div class="page-header-bg" style="background-image: url('{{$post->photo->path}}');" data-stellar-background-ratio="0.5"></div>
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
                        <li><i class="fa fa-eye"></i> 807</li>
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
                <!-- post share -->
                <div class="section-row">
                    <div class="post-share">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                        <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
                        <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
                    </div>
                </div>
                <!-- /post share -->

                <!-- post content -->
                <div class="section-row">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->body}}</p>

                    <blockquote class="blockquote">
                        <p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
                        <footer class="blockquote-footer">John Doe</footer>
                    </blockquote>
                    <p>Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.</p>
                    <figure>
                        <img src="{{$post->photo->path}}" alt="">
                    </figure>
                    <h3>Sit nulla quidam et, eam ea legimus deserunt neglegentur.</h3>
                    <p>No possim singulis sea, dolores salutatus interpretaris eam ad. An singulis postulant his, an inermis urbanitas mel. Wisi veri noster eu est, diam ridens eum in. Omnium imperdiet patrioque quo in, est sumo persecuti abhorreant ei. Sed feugiat iracundia id, inermis percipit eu has.</p>
                    <p>In vidit homero ullamcorper his, ea mea senserit constituto, et alia idque congue sit. Postea percipit his ne. Probo movet noluisse in nam, sed ex utroque inermis corrumpit, oratio tation vix at. Usu aperiri assentior at, eam et melius iudicabit pertinacia.</p>
                </div>
                <!-- /post content -->

                <!-- post tags -->
                <div class="section-row">
                    <div class="post-tags">
                        <ul>
                            <li>TAGS:</li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Health</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /post tags -->

                <!-- post nav -->
                <div class="section-row">
                    <div class="post-nav">
                        <div class="prev-post">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
                            <h3 class="post-title"><a href="/">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <span>Previous post</span>
                        </div>

                        <div class="next-post">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
                            <h3 class="post-title"><a href="/">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <span>Next post</span>
                        </div>
                    </div>
                </div>
                <!-- /post nav  -->

                <!-- post author -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">About <a href="author.html">{{$post->user->name}}</a></h3>
                    </div>
                    <div class="author media">
                        <div class="media-left">
                            <a href="author.html">
                                <img class="author-img media-object" src="{{$post->user->photo ? $post->user->photo->path : '/images/default.png'}}" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="author-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /post author -->

                <!-- /related post -->
                <div>
                    <div class="section-title">
                        <h3 class="title">Related Posts</h3>
                    </div>
                    <div class="row">
                        <!-- post -->
                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Health</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->

                        <!-- post -->
                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Fashion</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->

                        <!-- post -->
                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Health</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                    </div>
                </div>
                <!-- /related post -->



















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

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#">Lifestyle <span>451</span></a></li>
                            <li><a href="#">Fashion <span>230</span></a></li>
                            <li><a href="#">Technology <span>40</span></a></li>
                            <li><a href="#">Travel <span>38</span></a></li>
                            <li><a href="#">Health <span>24</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /category widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>
                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Technology</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /post widget -->

                <!-- galery widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /galery widget -->

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
