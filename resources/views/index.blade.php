@include('layouts.head')

<body>
    @include('layouts.topbar')

    @include('layouts.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Selamat Datang di Website Desa Kismoyoso</h1>
            <h2 style="font-size: 14pt;">Mewujudkan sistem pemerintahan yang efektif sehingga mampu meningkatkan pelayanan dan kesejahteraan masyarakat</h2>
            <a href="#about" class="btn-get-started scrollto">Jelajahi</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <!-- <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div> -->

                    <div class="container">
                        <div class="box-heading" data-aos="fade-up">
                            <h4>Sekilas Tentang Desa</h4>
                            <h3>Desa Kismoyoso: Sejarah, Potensi, dan Kearifan Lokal</h3>
                            <p>
                                Desa Kismoyoso terletak di Kecamatan Ngemplak, Kabupaten Boyolali, Jawa Tengah.
                                Desa ini dikenal dengan keindahan alamnya, suasana yang tenang, serta masyarakatnya yang ramah dan gotong royong.
                                Sebagai salah satu desa yang berkembang di Kabupaten Boyolali, Kismoyoso menawarkan berbagai potensi dan peluang yang dapat dikembangkan untuk kesejahteraan masyarakatnya.
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bx bx-history"></i></div>
                            <h4 class="title"><a href="">Sejarah</a></h4>
                            <p class="description">Nama "Kismoyoso" berasal dari kata "Kismo" yang berarti tanah atau bumi dan "Yoso" yang berarti berjaya atau makmur. </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-leaf"></i></div>
                            <h4 class="title"><a href="#">Potensi</a></h4>
                            <p class="description">Potensi yang luar biasa, mencakup sektor pertanian, kerajinan tangan, kuliner, hingga produk olahan.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Kearifan Lokal</a></h4>
                            <p class="description">Kearifan lokal tercermin dalam adat istiadat, gotong royong, seni dan budaya, pengelolaan sumber daya alam yang berkelanjutan, serta kehidupan beragama yang harmonis.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10225" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk (Jiwa)</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="3779" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Luas Wilayah (km<sup>2</sup>)</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Dusun</p>
                    </div>

                    <!-- <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Prestasi Desa</p>
                    </div> -->
                    <p style="text-align: center; margin-top: 20px; font-size: 9pt; font-weight: bold;"><sup>(*)</sup> Berdasarkan Data Badan Pusat Statistik (BPS) Kabupaten Boyolali Tahun 2020</p>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Potensi Desa</h3>
                    <p>Temukan berbagai potensi luar biasa Desa Kismoyoso</p>
                    <a class="cta-btn" href="{{ route('potensi') }}">Temukan</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Program</h2>
                    <h3><span>Program</span> Pemerintahan</h3>
                    <p>Berbagai program dari pemerintah untuk meningkatkan kesejahteraan masyarakat dan mencapai tujuan bersama.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box" data-aos="zoom-in">
                            <div class="icon"><i class="bx bx-store"></i></div>
                            <h4><a href="">Ekonomi</a></h4>
                            <p>Pembuatan dan pengelolaan dokumen penting seperti Kartu Keluarga (KK), Kartu Tanda Penduduk (KTP), akta kelahiran, dan akta kematian.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Infrastruktur</a></h4>
                            <p>Perizinan untuk berbagai keperluan, termasuk izin mendirikan bangunan (IMB), izin usaha, dan izin keramaian.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-network-chart"></i></div>
                            <h4><a href="">Sosial</a></h4>
                            <p>Pemberian bantuan kepada warga kurang mampu, penyaluran bantuan sosial dari pemerintah, serta program-program pemberdayaan masyarakat.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="umkm" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>UMKM (Usaha Mikro, Kecil, dan Menengah)</h2>
                    <h3><span>UMKM</span> Desa Kismoyoso</h3>
                    <p>Desa Kismoyoso memiliki berbagai UMKM yang berkembang, menghasilkan beragam produk lokal berkualitas, dan berkontribusi terhadap perekonomian desa.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Mikro</li>
                            <li data-filter=".filter-card">Kecil</li>
                            <li data-filter=".filter-web">Menengah</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{ route('jamu-gendong') }}">
                            <img src="{{ asset('assets/img/dummy/jamu-gendong.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Jamu Gendong</h4>
                            <p>Kuliner</p>
                            <a href="{{ asset('assets/img/dummy/jamu-gendong.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jamu Gendong"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('jamu-gendong') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{ route('tauge') }}">
                            <img src="{{ asset('assets/img/tauge 6.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Tauge</h4>
                            <p>Pertanian & Perkebunan</p>
                            <a href="{{ asset('assets/img/tauge 6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('tauge') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <a href="{{ route('tahu') }}">
                            <img src="{{ asset('assets/img/tahuu.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Tahu</h4>
                            <p>Kuliner</p>
                            <a href="{{ asset('assets/img/tahu.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tahu"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('tahu') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{ route('kandang-burung') }}">
                            <img src="{{ asset('assets/img/kandangburung.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Kandang Burung</h4>
                            <p>Kerajinan Tangan</p>
                            <a href="{{ asset('assets/img/kandangburung.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kandang Burung Pak Wawan"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('kandang-burung') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{ route('lilin-aromaterapi') }}">
                            <img src="assets/img/lilin2.jpg" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Lilin Aromaterapi</h4>
                            <p>Kerajinan Tangan dan Daur Ulang</p>
                            <a href="{{ asset('assets/img/lilin2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lilin Aromaterapi"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('lilin-aromaterapi') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{ route('lilin-aromaterapi') }}">
                            <img src="assets/img/dummy/gamelan.jpg" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4>Gamelan</h4>
                            <p>Alat Musik Tradisional</p>
                            <a href="{{ asset('assets/img/dummy/gamelan.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lilin Aromaterapi"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('gamelan') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <!-- <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>F.A.Q</h2>
                    <h3><span>Pertanyaan</span> Yang Sering Diajukan</h3>
                    <p>Di sini Anda dapat menemukan jawaban atas pertanyaan-pertanyaan yang sering diajukan tentang Desa Kismoyoso.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section>End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Kontak</h2>
                    <h3>Informasi <span>Kontak</span> Desa Kismoyoso</h3>
                    <p>Untuk informasi Desa Kismoyoso lebih lanjut, silakan hubungi kontak di bawah ini.</p>
                </div>

                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15921.83060682482!2d110.79090012024099!3d-7.506429186617664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a13dd20728b07%3A0x1213d42f9b6cff7!2sKismoyoso%2C%20Ngemplak%2C%20Boyolali%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1720927291218!5m2!1sen!2sid" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Raya Kismoyoso, Kecamatan Ngemplak, Kabupaten Boyolali, Provinsi Jawa Tengah, Indonesia 57375</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-clock"></i>
                                <h4>Waktu Kerja:</h4>
                                <p>Senin — Jumat</p>
                                <p>08.00 — 12.00 WIB</p>
                            </div>

                            <!-- <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div> -->

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <a href="tel:+62895320170201">
                                    <p>+62 895-3201-70201</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>