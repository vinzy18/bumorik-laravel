@extends('frontend.layout.index')

@section('container')

<section id="hero" class="d-flex align-items-center mb-4">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-right">Official Website <br>GMIM Bukit Moria Rike</h1>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
            <img src="assets/img/logo-bumorik.jpg" class="img-fluid animated" alt="logo-bumorik" width="450">
            </div>
        </div>
    </div>
</section>

  <!-- ======= Kegiatan Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Info Gereja</h2>
      </div>

      <div class="row mb-10" data-aos="fade-up">
        <div class="column d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/flyerpemilihan.jpg" alt="" width="1182" height="665">
                </div>
                <div class="carousel-item">
                    <iframe width="1182" height="665" src="https://www.youtube.com/embed/gMxKmRTC94Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <iframe width="1182" height="665" src="https://www.youtube.com/embed/HCWMgBDkXrE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <iframe width="1182" height="665" src="https://www.youtube.com/embed/UqVOaSc3w1U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>

      <div id="warta" class="row">
          <div class="column d-flex justify-content-center">
              <h2>Jadwal Ibadah</h2>
          </div>

      </div>
    </div>
  </section><!-- End Kegiatan Section -->



@endsection
