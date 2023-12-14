@extends('layouts.master')

@section('title', $category->description)

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <!-- 1st Column for Posts -->
            <div class="col-md-9">
                <!-- Content from your database -->
                @foreach($posts as $post)
                    <div class="post-entry-1">
                        <!-- Your post content here -->
                        <a href="{{ route('posts.show', $post->post_id) }}"><img src="assets/img/post-landscape-{{ $loop->index % 8 + 1 }}.jpg" alt="" class="img-fluid"></a>
                        <div class="post-meta">
                            <span class="date">{{ $post->created_at->format('M jS Y') }}</span>
                            @if($post->categories->isNotEmpty())
                                @foreach($post->categories as $category)
                                    <span class="category">{{ $category->name }}</span>
                                @endforeach
                            @endif
                        </div>
                        <h2><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->title }}</a></h2>
                    </div>
                @endforeach
            </div>
            <!-- 2nd Column for Trending -->
            <div class="col-md-3">
                <div class="aside-block">
                    <div class="tab-content" id="pills-tabContent">
                        @include('home.trending2')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
