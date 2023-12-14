

@extends('layouts.master')

@section('title', $post->title) <!-- Đặt title cho trang -->

@section('content')
<link rel="stylesheet" href="{{asset('/assets/css/comments.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include your comments.js script -->
<script src="{{ asset('/assets/js/comments.js') }}"></script>
    <div class="content">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" >

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">

                            <div class="post-meta">
                                {{-- <span class="date">{{ $post->category->name }}</span> <!-- Thêm category nếu có --> --}}
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at->format('j M.Y') }}</span>
                            </div>
                            <h1 class="mb-5">{{ $post->title }}</h1>
                            <img src="{{$post->image}}" width="100%">
                            <p>{!! $post->content !!}</p>

                            <!-- Các phần khác của bài viết tại đây -->
                            <!-- Hiển thị các comment -->



                            <div class="container mt-5 mb-5">

                                <div class="row height d-flex justify-content-center align-items-center">

                                  <div class="col-md-7 w-100 fs-5">

                                    <div class="card">

                                      <div class="p-3">

                                        <h6>Comments</h6>

                                      </div>

                                      <div class="mt-3 d-flex flex-row align-items-center p-3 form-color">

                                        <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2">
                                        <input type="text" class="form-control" placeholder="Enter your comment...">

                                      </div>

                                      <div class="mt-2">

                                        <div class="d-flex flex-row p-3">

                                          <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">

                                          <div class="w-100">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center">
                                                  <span class="mr-2 fw-bold">Brian selter</span>
                                                  <small class="c-badge">Top Comment</small>
                                                </div>
                                                <small>12h ago</small>
                                          </div>

                                          <p class="text-justify comment-text mb-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                          <div class="d-flex flex-row user-feed">

                                            <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span>
                                            <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span>


                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                            <script>
                                var post_id = {{ $post->post_id }};
                            </script>


                        </div><!-- End Single Post Content -->

                    </div>
                    <div class = "col-md-3">
                        <div class="aside-block">
                            <div class="tab-content" id="pills-tabContent">
                        @include('home.trending2') <!--địt mẹ dễ nhầm cái này vl-->
                             </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </div>

@endsection




{{--



<!-- Form để thêm comment mới -->
<form id="comment-form">
    @csrf
    <!-- Các trường và nút submit ở đây -->
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <button type="submit">Submit Comment</button>
</form>
<div id="comments-section">
    <h2>Comments</h2>
    <ul id="comments-list">
        @foreach ($post->comments as $comment)
            <li>{{ $comment->body }} (Post ID: {{ $comment->post_id }})</li>
        @endforeach
    </ul>
</div> --}}











{{--

      <div class="container mt-5 mb-5">
                                <div class="d-flex justify-content-center row">
                                    <div class="d-flex flex-column col-md-8">

                                        <div class="coment-bottom bg-white p-2 px-4">
                                            @auth
                                            <form id="comment-form">
                                                @csrf
                                            <!-- Display comment input and button only for authenticated users -->
                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                                <!-- Update the image source based on your user's image -->
                                                <input type="text" class="form-control mr-3" id="comment" placeholder="Add comment">
                                                <!-- Update the button type and class -->
                                                <button class="btn btn-primary" type="submit" id="submit-comment">Comment</button>
                                            </div>
                                            </form>
                                            @else
                                            <!-- Display a message or login link for non-authenticated users -->
                                            <p>You need to <a href="{{ route('login') }}">login</a> to leave a comment.</p>
                                            @endauth

                                            <!-- Comments Section -->
                                            <h3>Comments</h3>


                                        </div>
                                    </div>
                                </div>
                            </div>
@foreach ($post->comments as $comment)
                                                <div class="commented-section mt-2">

                                                    <div class="d-flex flex-row align-items-center commented-user">
                                                        @if ($comment->user)
                                                        <h5 class="mr-2">{{ $comment->user->name }}</h5>
                                                    @else
                                                        <h5 class="mr-2">Anonymous</h5>
                                                    @endif
                                                        <span class="dot mb-1"></span>
                                                        <span class="mb-1 ml-2">{{ $comment->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <div class="comment-text-sm">
                                                        <span>{{ $comment->body }}</span>
                                                    </div>
                                                    <div class="reply-section">
                                                        <div class="d-flex flex-row align-items-center voting-icons">
                                                            <i class="fa fa-sort-up fa-2x mt-3 hit-voting like-btn" data-comment-id="{{ $comment->id }}"></i>

                                                            <span class="ml-2" id="comment-likes-{{ $comment->id }}">{{ $comment->likes }}</span><span class="dot ml-2"></span>
                                                            <h6 class="ml-2 mt-1">Reply</h6>
                                                        </div>
                                            </div>
                                        </div>
                                        @endforeach --}}
