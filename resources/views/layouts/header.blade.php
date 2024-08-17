<!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo" style="display: flex; align-items: center;">
                <a href="{{ url('/') }}" style="margin-right: 10px;"><img src="{{ asset('assets/img/logo-boyolali.png') }}" style="height: 50px; width: 30px;" alt="" class="img-fluid"></a>
                <h1 class="text-light" style="margin: 0;"><a href="{{ url('/') }}">Desa Kismoyoso</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Potensi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('potensi-pertanian') }}">Pertanian</a></li>
                            <!-- <li><a href="{{ route('potensi-perkebunan') }}">Perkebunan</a></li> -->
                            <li class="dropdown"><a class="nav-link scrollto" href="{{ route('umkm') }}"><span>UMKM</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ route('jamu-gendong') }}">Jamu Gendong</a></li>
                                    <li><a href="{{ route('tahu') }}">Tahu</a></li>
                                    <li><a href="{{ route('tauge') }}">Tauge</a></li>
                                    <li><a href="{{ route('kandang-burung') }}">Kandang Burung</a></li>
                                    <li><a href="{{ route('lilin-aromaterapi') }}">Lilin Aromaterapi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang Desa</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ route('struktur') }}">Struktur Pemerintahan</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Infrastruktur</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ route('radar-pesawat') }}">Radar Pesawat</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Sekolah</a></li>
                                    <li><a href="#">Pusat Kesehatan</a></li>
                                    <li><a href="#">Taman</a></li>
                                    <li><a href="#">Tempat Ibadah</a></li>
                                    <li><a href="#">Pusat Olahraga</a></li>
                                    <li><a href="#">Perpustakaan</a></li>
                                    <li><a href="#">Pasar</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{ route('informasi-geografis') }}">Geografis Desa</a></li>
                            <li class="dropdown"><a href="#"><span>Demografis Desa</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ route('komposisi-penduduk') }}">Komposisi Penduduk</a></li>
                                    <li><a href="{{ route('pekerjaan-penduduk') }}">Pekerjaan Penduduk</a></li>
                                    <li><a href="{{ route('pendidikan-penduduk') }}">Pendidikan Penduduk</a></li>
                                    <!-- <li><a href="#">Kesejahteraan Penduduk</a></li>
                                    <li><a href="#">Kesehatan Penduduk</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a class="nav-link scrollto" href="{{ route('kebun-gizi') }}"><span>Kebun Gizi</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ route('kebun-gizi-lembayung') }}">Kebun Gizi Lembayung</a></li>
                                    <li><a href="{{ route('kebun-gizi-sawi') }}">Kebun Gizi Sawi</a></li>
                                    <li><a href="{{ route('kebun-gizi-bayam') }}">Kebun Gizi Bayam</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posyandu') }}">Posyandu</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('/berita') }}">Berita</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/arsip') }}">Arsip</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->