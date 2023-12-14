<!-- ======= Post Grid Section ======= -->
<section post_id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <!-- 1st Column for Posts -->
            <div class="col-lg-4">
                <!-- Content from your database -->
                @foreach($posts->take(3) as $post)
                    <div class="post-entry-1">
                        <!-- Your post content here -->
                        <a href="{{ route('posts.show', $post->post_id) }}">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">
                        </a>
                        <div class="post-meta">
                            <span class="date">{{ $post->created_at->format('M jS Y') }}</span>
                            @if($post->categories->isNotEmpty())
                                <span class="category">{{ $post->categories->first()->name }}</span>
                            @endif
                        </div>
                        <h2><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->title }}</a></h2>
                    </div>
                @endforeach
            </div>

            <!-- 2nd Column for Posts -->
            <div class="col-lg-4 border-start custom-border">
                <!-- Content from your database -->
                @foreach($posts->skip(3)->take(3) as $post) <!-- Skip the first 3 posts -->
                    <div class="post-entry-1">
                        <!-- Your post content here -->
                        <a href="{{ route('posts.show', $post->post_id) }}">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">
                        </a>
                        <div class="post-meta">
                            <span class="date">{{ $post->created_at->format('M jS Y') }}</span>
                            @if($post->categories->isNotEmpty())
                                <span class="category">{{ $post->categories->first()->name }}</span>
                            @endif
                        </div>
                        <h2><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->title }}</a></h2>
                    </div>
                @endforeach
            </div>

            <!-- Add your 3rd Column and Trending section as needed -->
            @include('home.trending')
        </div>
    </div>
</section>
<!-- End Post Grid Section -->
