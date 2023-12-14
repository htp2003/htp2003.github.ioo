@extends('layouts.master')

@section('title', 'Kết quả tìm kiếm')

@section('content')
    <div class="content">
        <section class="single-post-content">
            <div class="container">
                <div class="row">

                    {{-- Search Results --}}
                    <div class="col-md-9 post-content">

                        <h2 class="search-result">Kết quả tìm kiếm cho "{{ $query }}"</h2>

                        @if ($posts->isEmpty())
                            <h3 >Không có kết quả nào phù hợp với tìm kiếm của bạn.</h3>
                        @else
                            <div class="row g-5">
                                @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <div class="post-entry-1">
                                            <a href="{{ route('posts.show', $post->post_id) }}">
                                                <img src="{{$post->image}}"  alt="" class="img-fluid">
                                            </a>
                                            <div class="post-meta">
                                                <span class="date">{{ $post->created_at->format('M jS Y') }}</span>
                                                @if($post->categories->isNotEmpty())
                                                    @foreach($post->categories as $category)
                                                        <span class="category">{{ $category->name }}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <h2><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div><!-- End Search Results -->

                    {{-- Sidebar --}}
                    <div class="col-md-3">
                        <div class="aside-block">
                            <div class="tab-content" id="pills-tabContent">
                                @include('home.trending2')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
