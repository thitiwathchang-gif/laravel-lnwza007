<x-active title="team" class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <h1>Team</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Team</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Team Section -->
  <section id="team" class="team section">

    <div class="site-section slider-team-wrap">
      <div class="container">

        <div class="slider-nav d-flex justify-content-end mb-3">
          <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
          <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
        </div>

        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "1",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".js-custom-next",
                "prevEl": ".js-custom-prev"
              },
              "breakpoints": {
                "640": {
                  "slidesPerView": 2,
                  "spaceBetween": 30
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="team">
                <div class="pic">
                  <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                </div>
                <h3 clas="">
                  <a href="#"><span class="">Jeremy</span> Walker</a>
                </h3>
                <span class="d-block position">CEO, Founder, Atty.</span>
                <p>
                  Separated they live in. Separated they live in Bookmarksgrove
                  right at the coast of the Semantics, a large language ocean.
                </p>
                <p class="mb-0">
                  <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team">
                <div class="pic">
                  <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid">
                </div>
                <h3 clas="">
                  <a href="#"><span class="">Lawson</span> Arnold</a>
                </h3>
                <span class="d-block position">CEO, Founder, Atty.</span>
                <p>
                  Separated they live in. Separated they live in Bookmarksgrove
                  right at the coast of the Semantics, a large language ocean.
                </p>
                <p class="mb-0">
                  <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team">
                <div class="pic">
                  <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid">
                </div>
                <h3 clas="">
                  <a href="#"><span class="">Patrik</span> White</a>
                </h3>
                <span class="d-block position">CEO, Founder, Atty.</span>
                <p>
                  Separated they live in. Separated they live in Bookmarksgrove
                  right at the coast of the Semantics, a large language ocean.
                </p>
                <p class="mb-0">
                  <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team">
                <div class="pic">
                  <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                </div>
                <h3 clas="">
                  <a href="#"><span class="">Kathryn</span> Ryan</a>
                </h3>
                <span class="d-block position">CEO, Founder, Atty.</span>
                <p>
                  Separated they live in. Separated they live in Bookmarksgrove
                  right at the coast of the Semantics, a large language ocean.
                </p>
                <p class="mb-0">
                  <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                </p>
              </div>
            </div>
            <!-- <div class="swiper-slide"></div> -->
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
  </section><!-- /Team Section -->

</x-active>