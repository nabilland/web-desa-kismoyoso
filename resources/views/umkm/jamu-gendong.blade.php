@extends('layouts.layout')

@section('breadcrumbs')
<h2>Jamu Gendong</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Jamu Gendong</li>
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
                            <img src="{{ asset('assets/img/jamu.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Jamu Gendong</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Menengah</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Pangan dan Minuman</li>
                        <li><strong>Kategori Produk</strong>: Minuman Kesehatan, Produk Herbal, atau Minuman Tradisional</li>
                        <li><strong>Produk Unggulan</strong>: Jamu</li>
                        <li><strong>Pemilik</strong>: Pak Narto</li>
                        <li><strong>Tahun Berdiri</strong>: </li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.com/maps/@-7.501002,110.801321,3a,75y,26.82h,77.09t/data=!3m7!1e1!3m5!1s5mZFTRzquA2Ok8b0GpFidQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D12.905330592893137%26panoid%3D5mZFTRzquA2Ok8b0GpFidQ%26yaw%3D26.818844403584194!7i16384!8i8192?coh=205410&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>: +6285-725-666-011
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285725666011">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        WhatsApp</button>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="portfolio-description">
                <h2>Jamu Gendong</h2>
                <p style="text-align: justify;">
                    Pak Sunarto, warga Desa Kismoyoso, Boyolali, meneruskan usaha jamu tradisional yang telah dijalankan keluarganya selama puluhan tahun. Setelah istrinya meninggal pada tahun 2020, Pak Sunarto mengambil alih produksi jamu, mengolah bahan-bahan yang dibelinya dari pasar, dan menjualnya secara keliling menggunakan sepeda motor.
                </p>
                <p style="text-align: justify;">
                    Ia memulai aktivitasnya sejak dini, meracik jamu di dapur rumahnya, dan berkeliling ke desa-desa sekitar untuk menjajakan produknya. Pak Sunarto bersama 14 orang lainnya di dusunnya tetap setia menjalankan usaha ini sebagai sumber utama penghidupan.
                </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection