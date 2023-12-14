 <!-- ======= Hero Slider Section ======= -->
 <section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
      <div class="row">
        <div class="col-12">
          <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">

                @foreach($posts->take(5) as $post)
                        <div class="swiper-slide">
                            <a href="{{ route('posts.show', ['id' => $post->post_id]) }}" class="img-bg d-flex align-items-end" style="background-image: url('{{ $post->image }}');">
                                <div class="img-bg-inner">
                                    <h2>{{ $post->title }}</h2>

                                </div>
                            </a>
                        </div>
                        @endforeach


            </div>
            <div class="custom-swiper-button-next">
              <span class="bi-chevron-right"></span>
            </div>
            <div class="custom-swiper-button-prev">
              <span class="bi-chevron-left"></span>
            </div>

            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Slider Section -->
