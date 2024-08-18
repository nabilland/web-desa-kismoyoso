@extends('layouts.layout')

@section('breadcrumbs')
<h2>Posyandu</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Program Sosial</li>
    <li>Posyandu</li>
</ol>
@endsection

@section('contents')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\posyandu.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\posyandu2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\posyandu3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\posyandu4.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Posyandu</h3>
                    <ul>
                        <li><strong>Nama</strong>: Posyandu Dahlia II</li>
                        <li><strong>Jenis Kegiatan</strong>: Pelayanan Kesehatan Ibu dan Anak</li>
                        <li><strong>Bidang Kegiatan</strong>: Kesehatan</li>
                        <li><strong>Kategori </strong>: Pelayanan Masyarakat</li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.com/maps/@-7.5054815,110.7854042,3a,75y,190.36h,79.11t/data=!3m7!1e1!3m5!1s0HreXE7zYx_7472Kw7wXcw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D0HreXE7zYx_7472Kw7wXcw%26cb_client%3Dmaps_sv.share%26w%3D900%26h%3D600%26yaw%3D190.36478318134007%26pitch%3D10.890077429779339%26thumbfov%3D90!7i16384!8i8192?coh=205410&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <!-- <div class="d-flex">
                            <li><strong>Kontak</strong>:
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        Chat via WhatsApp</button>
                                </a> -->
                                <!-- <a href="tel:">
                                    <button class="green-button">
                                        <i class="bx bx-phone" style="padding-right:2px"></i>
                                        Hubungi</button>
                                </a> -->
                            <!-- </li>
                        </div> -->
                    </ul>
                    <!-- <h3 style="padding-top:20px;">Paguyuban UMKM</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div> -->
                </div>
            </div>
            <div class="portfolio-description">
            <h2>Sekilas Tentang Posyandu Dahlia II</h2>
            <p style="text-align: justify;">
                Posyandu Dahlia II terletak di Desa Kismoyoso di Dukuh Beran. Posyandu ini berperan penting dalam memberikan layanan kesehatan kepada masyarakat, terutama ibu dan anak. Dengan fasilitas yang memadai dan tenaga kesehatan yang terlatih, Posyandu Dahlia II menyediakan berbagai layanan seperti pemeriksaan kehamilan, imunisasi, pemantauan tumbuh kembang anak, serta penyuluhan kesehatan. Kegiatan posyandu dilakukan secara rutin dan melibatkan partisipasi aktif masyarakat, sehingga mampu meningkatkan kualitas kesehatan dan kesejahteraan warga Desa Kismoyoso.
            </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection