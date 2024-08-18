@extends('layouts.layout')

@section('breadcrumbs')
<h2>Kebun Gizi Bayam</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ route('kebun-gizi') }}">Kebun Gizi</a></li>
    <li>Kebun Gizi Bayam</li>
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
                            <img src="{{ asset('assets/img/kebungizi-bayam.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-bayam2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-bayam3.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Kebun Gizi</h3>
                    <ul>
                        <li><strong>Nama </strong>: Kebun Gizi Bayam</li>
                        <li><strong>Jenis Kegiatan</strong>: Budidaya tanaman yang bernilai gizi</li>
                        <li><strong>Bidang Kegiatan</strong>: Pertanian dan kesehatan</li>
                        <li><strong>Kategori </strong>: Sayuran organik dan bahan pangan sehat </li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.co.id/maps/@-7.5070892,110.7850471,3a,75y,211.42h,84.8t/data=!3m6!1e1!3m4!1soNP16jkyDc539R54Xavw5Q!2e0!7i16384!8i8192?authuser=2&coh=205409&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <!-- <li><strong>Pemilik</strong>: John Doe</li> -->
                        <li><strong>Tahun Berdiri</strong>: Agustus 2022</li>
                        <!-- <div class="d-flex">
                            <li><strong>Kontak</strong>: +62 812-345-67891
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281234567891">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        WhatsApp</button>
                                </a>
                            </li>
                        </div> -->
                        <li><strong>Prestasi</strong>: Juara 3 Lomba Kebun Gizi PKK Induk Desa Kismoyoso</li>
                        <!-- <h3 style="padding-top:20px;">Paguyuban Kebun Gizi</h3>
                        <div class="d-flex">
                            <button class="green-button">
                                <i class="bx bx-info-circle" style="padding-right:2px"></i>
                                Lihat Informasi Selengkapnya
                            </button>
                        </div> -->
                </div>
                </ul>

            </div>
        </div>
        <div class="portfolio-description">
            <h2>Kenal Lebih Dekat dengan Kebun Gizi Bayam</h2>
            <p style="text-align: justify;">
                Kebun Gizi Bayam di Desa Kismoyoso, berdiri sejak 2022. Kebun ini berlokasi di Dukuh Krikilan RT 004/RW 002, dan terletak di dekat Middle Marker (MM) alat navigasi pesawat bandara Adi Soemarmo. Kebun Gizi Bayam berfokus pada peningkatan kesejahteraan masyarakat melalui pertanian berkelanjutan dan edukasi gizi dibantu dengan ibu-ibu PKK (Pemberdayaan dan Kesejahteraan Keluarga) setempat.
                Kebun Gizi ini ditanam aneka macam tanaman mulai dari tanaman obat, buah-buahan seperti jeruk bali, pisang, pepaya, dll.; sayur mayur seperti singkong, cabai, tomat, sawi, bayam, dll.; dan ada juga kandang ayam untuk menyimpan hewan ternak. Dengan adanya Kebun Gizi ini Warga bisa mengambil hasil tanaman di Kebun Gizi Sawi secara cuma-cuma alias gratis.
            </p>
        </div>
    </div>


    </div>
</section><!-- End Portfolio Details Section -->
@endsection