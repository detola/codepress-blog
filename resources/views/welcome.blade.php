@extends('layouts.frontpage')

@section('content')

<!-- SECTION -->
{{-- {{dd($banner)}} --}}
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div id="hot-post" class="row hot-post">
            <div class="col-md-8 hot-post-left">
                <!-- post -->
                
                @foreach ($recents as $recent)

                <div class="post post-thumb">
                    <a class="post-img" href="{{route('post', $recent->slug)}}"><img src="{{$recent->photo->path}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">{{$recent->category->name}}</a>
                        </div>
                        <h3 class="post-title title-lg"><a href="{{route('post', $recent->slug)}}">{{$recent->title}}</a></h3>
                        <ul class="post-meta">
                            <li><a href="{{route('post', $recent->slug)}}">{{$recent->author}}</a></li>
                            <li>{{$recent->updated_at->toFormattedDateString()}}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
                
                <!-- /post -->
            </div>
            <div class="col-md-4 hot-post-right">
                <!-- post -->
                @foreach ($banners as $banner)

                <div class="post post-thumb">
                    <a class="post-img" href="{{route('post', $banner->slug)}}"><img src="{{$banner->photo->path}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{route('post', $banner->slug)}}">{{$banner->category->name}}</a>
                        </div>
                        <h3 class="post-title"><a href="{{route('post', $banner->slug)}}">{{$banner->title}}</a></h3>
                        <ul class="post-meta">
                            <li><a href="{{route('post', $banner->slug)}}">{{$banner->author}}</a></li>
                            <li>{{$banner->updated_at->toFormattedDateString()}}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <!-- /post -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                <!-- post -->
                <div class="post post-row">
                    <a class="post-img" href="{{route('post', $post->slug)}}"><img src="{{$post->photo->path}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{route('post', $post->slug)}}">{{$post->category->name}}</a>
                        </div>
                        <h3 class="post-title"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h3>
                        <ul class="post-meta">
                            <li><a href="{{route('post', $post->slug)}}">{{$post->user->name}}</a></li>
                            <li>{{$post->updated_at->toFormattedDateString()}}</li>
                        </ul>
                        <p>{{$post->excerpt}}...</p>
                    </div>
                </div>
                <!-- /post -->
                @endforeach
            </div>
            <div class="col-md-4">
                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    @foreach($categories as $category)
                    <div class="category-widget">
                        <ul>
                            <li><a href="#">{{$category->name}}</a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!-- /category widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


@endsection