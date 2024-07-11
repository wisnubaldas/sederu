    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Team</h2>
                <p>Our hard working team</p>
            </header>
            <div class="row gy-4">
                @isset($galeri)
                    @foreach ($galeri as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset("FlexStart/assets/img/team/".$item['img']) }}" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href="{{$item['fb']}}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{$item['tw']}}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{$item['inst']}}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{$item['ld']}}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{$item['name']}}</h4>
                                    <span>{{$item['pos']}}</span>
                                    <p>{{$item['des']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>

        </div>

    </section><!-- End Team Section -->
