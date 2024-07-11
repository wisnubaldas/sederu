 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Clients</h2>
        <p>Our clients who support good cooperation</p>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          @isset($galeri)
              @foreach ($galeri as $item)
                <div class="swiper-slide"><img src="{{asset("FlexStart/assets/img/clients/$item")}}" class="img-fluid" alt=""></div>
              @endforeach
          @endisset
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->