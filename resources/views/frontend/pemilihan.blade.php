@extends('frontend.layout.index')

@section('container')

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title mb-10" data-aos="fade-up">
        <h2>Pemilihan Pelsus dan Kategorial BIPRA</h2>
      </div>

      {{-- Daftar Pemilih --}}
      <div id="daftar_pemilih">
        <div class="row">
            <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                <h2><strong>Daftar Pemilih</strong></h2>
            </div>
        </div>
      </div>

      {{-- Hasil Pemilihan --}}
      <div id="hasil_pemilihan">
        <div class="section-title mb-10" data-aos="fade-up">
            <h2>Hasil Pemilihan</h2>
        </div>

        {{-- Hasil Kategorial --}}
        <div id="hasil_kategorial">
        @foreach ( $kategorials as $kategorial )
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Kategorial {{ $kategorial->name }}</strong></h2>
                </div>
            </div>

            @if ($pkbs->isNotEmpty())
            <div class="row justify-content-center mb-10">
                @foreach ( $pkbs->where('kategorial_id', $kategorial->id) as $pkb )
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $pkb->name }}</h4>
                            <p>{{ $pkb->jabatan->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Belum ada hasil</h4>
                            <p>Belum ada hasil</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>

                {{-- <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Wakil Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara I</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara II</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        {{-- Hasil WKI --}}
        {{-- <div id="hasil_wki">
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Kategorial WKI</strong></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Wakil Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara I</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara II</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        {{-- Hasil Pemuda --}}
        {{-- <div id="hasil_pemuda">
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Kategorial Pemuda</strong></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Wakil Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara I</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara II</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        {{-- Hasil Remaja --}}
        {{-- <div id="hasil_remaja">
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Kategorial Remaja</strong></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Wakil Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara I</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara II</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        {{-- Hasil asm --}}
        {{-- <div id="hasil_asm">
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Kategorial ASM</strong></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <p>Wakil Sekretaris</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara I</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Bendahara II</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mb-10">
                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}


        {{-- Pelsus --}}
        <div id="hasil_pelsus">
            <div class="row">
                <div class="col-sm-3 mb-5 border-bottom border-3" data-aos="fade-right">
                    <h2><strong>Pelayan Khusus Kolom</strong></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-10">
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <p>Kolom 1</p>
                    </div>
                </div>
            </div>



        </div>
      </div>


    </div>
  </section><!-- End Team Section -->




{{-- <!-- ======= Pemilihan Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <h2>Hasil Pemilihan BPMJ dan Pelsus</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
            <h3>Business</h3>
            <h4><sup>$</sup>19<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
            <h3>Developer</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

      </div>



    </div>
  </section><!-- End Pricing Section --> --}}

@endsection
