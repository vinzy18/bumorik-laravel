<!-- ======= Navbar ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span><img src="assets/img/logo.png" alt="logo-gmim" class="img-fluid"> BUMORIK</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}
      </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">Tentang</a></li>
                <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="/services">Pelayanan</a></li>
                {{-- <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li> --}}
                <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="/team">BPMJ</a></li>
                <li class="drop-down {{ Request::is('pricing') ? 'active' : '' }}"><a href="/pemilihan">Pemilihan Pelsus</a>
                    <ul>
                        <li><a href="#daftar_pemilih">Daftar Pemilih</a></li>
                        <li class="drop-down"><a href="/pricing#hasil_kategorial">Hasil Pemilihan</a>
                            <ul>
                                <li class="drop-down"><a href="/pricing#hasil_kategorial">Kategorial</a>
                                    <ul>
                                        <li><a href="/pricing#hasil_pkb">Pria Kaum Bapak</a></li>
                                        <li><a href="#hasil_wki">Wanita Kaum Ibu</a></li>
                                        <li><a href="#hasil_pemuda">Pemuda</a></li>
                                        <li><a href="/pricing#hasil_remaja">Remaja</a></li>
                                        <li><a href="#hasil_asm">Anak Sekolah Minggu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#hasil_pelsus">Pelsus</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dokumentasi</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Navbar -->
