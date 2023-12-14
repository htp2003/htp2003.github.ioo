<!-- Trending Section -->

    <div class="trending">
        <h3>Trending</h3>
        <ul class="trending-post">
            @foreach ($trendingPosts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->post_id) }}">
                        <span class="number">{{ $loop->iteration }}</span>
                        <h3>{{ $post->title }}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
<!-- End Trending Section -->
