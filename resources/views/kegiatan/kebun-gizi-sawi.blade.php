@extends('layouts.layout')

@section('breadcrumbs')
<h2>Kebun Gizi Sawi</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ route('kebun-gizi') }}">Kebun Gizi</a></li>
    <li>Kebun Gizi Sawi</li>
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
                            <img src="{{ asset('assets/img/kebun-gizi-sawi.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi4.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi5.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi6.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi7.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-sawi8.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Kebun Gizi</h3>
                    <ul>
                        <li><strong>Nama </strong>: Kebun Gizi Sawi</li>
                        <li><strong>Jenis Kegiatan</strong>: Budidaya tanaman yang bernilai gizi</li>
                        <li><strong>Bidang Kegiatan</strong>: Pertanian dan kesehatan</li>
                        <li><strong>Kategori </strong>: Sayuran organik dan bahan pangan sehat </li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.co.id/maps/@-7.5106109,110.781684,3a,75y,176.55h,78.95t/data=!3m7!1e1!3m5!1szKMbzmJ6mWRx21s0dhEh3Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DzKMbzmJ6mWRx21s0dhEh3Q%26cb_client%3Dsearch.revgeo_and_fetch.gps%26w%3D96%26h%3D64%26yaw%3D113.79059%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192?authuser=2&coh=205409&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <!-- <li><strong>Pemilik</strong>: John Doe</li> -->
                        <li><strong>Tahun Berdiri</strong>: 2022</li>
                        <!-- <div class="d-flex">
                            <li><strong>Kontak</strong>: +62 812-345-67891
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281234567891">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        WhatsApp</button>
                                </a>
                            </li>
                        </div> -->
                        <li><strong>Prestasi</strong>: Juara 1 Lomba Kebun Gizi PKK Induk Desa Kismoyoso</li>
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
            <h2>Kenal Lebih Dekat dengan Kebun Gizi Sawi</h2>
            <p style="text-align: justify;">
                Kebun Gizi Sawi di Desa Kismoyoso, berdiri sejak 2022. Kebun ini berlokasi di Tegalan RT 003/RW 001, Kebun Gizi ini dinaungi oleh PKK Sentosa Makmur. Kebun Gizi Saawi berfokus pada peningkatan kesejahteraan masyarakat melalui pertanian berkelanjutan dan edukasi gizi dibantu dengan ibu-ibu PKK (Pemberdayaan dan Kesejahteraan Keluarga) setempat.
                Kebun Gizi ini ditanam aneka macam tanaman mulai dari tanaman obat, buah-buahan seperti jeruk bali, pisang, pepaya, dll.; sayur mayur seperti singkong, cabai, tomat, sawi, dll.; dan ada juga kandang ayam untuk menyimpan hewan ternak. Dengan adanya Kebun Gizi ini Warga bisa mengambil hasil tanaman di Kebun Gizi Sawi secara cuma-cuma alias gratis.
            </p>

        </div>
    </div>


    </div>
</section><!-- End Portfolio Details Section -->
@endsection