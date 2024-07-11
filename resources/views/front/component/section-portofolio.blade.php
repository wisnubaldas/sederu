<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            {{-- <li data-filter=".filter-card">Card</li> --}}
            {{-- <li data-filter=".filter-web">Web</li> --}}
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @isset($galeri)
            @foreach ($galeri as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset("FlexStart/assets/img/ss/$item")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="{{asset("FlexStart/assets/img/ss/$item")}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="image-{{$item}}"><i class="bi bi-plus"></i></a>
                    <a href="#portpolio" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        @endisset

      </div>

    </div>

  </section><!-- End Portfolio Section -->