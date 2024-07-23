@extends('layouts.layout')

@section('breadcrumbs')
<h2>Pertanian</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ route('potensi') }}">Potensi Desa</a></li>
    <li>Pertanian</a></li>
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
                            <img src="{{ asset('assets\img\pertanian-sawah.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\pertanian-sawah-2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\pertanian-sawah-3.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Potensi Pertanian</h3>
                    <ul>
                        <li><strong>Komoditas</strong>: Padi</li>
                        <li><strong>Luas Lahan Pertanian</strong>: 443,23 Ha</li>
                        <li><strong>Musim Tanam</strong>: Biasanya pada musim Hujan, dipanen 3-4 bulan</li>
                        <li><strong>Nilai Ekonomis</strong>: Padi adalah komoditas utama yang mendukung ketahanan pangan dan perekonomian desa.</li>
                    </ul>
                    <h3 style="padding-top:20px;">Komunitas Petani</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <h2>Pertanian di Desa Kismoyoso</h2>
                <p style="text-align: justify;">
                    Desa Kismoyoso memiliki luas lahan pertanian sebesar 443,23 hektar yang sebagian besar ditanami padi. Komunitas petani di desa ini sangat aktif dalam mengelola lahan pertanian dan menerapkan praktik-praktik pertanian yang berkelanjutan. Dengan kondisi tanah yang subur dan iklim yang mendukung, pertanian padi di Kismoyoso memberikan hasil panen yang melimpah dan berkualitas tinggi.
                </p>
                <p style="text-align: justify;">
                Para petani di Desa Kismoyoso juga tergabung dalam komunitas yang saling mendukung dan berbagi pengetahuan serta teknik-teknik pertanian. Selain padi, desa ini juga memiliki potensi untuk mengembangkan berbagai komoditas pertanian lainnya. Pertanian di Kismoyoso tidak hanya menjadi sumber penghasilan utama bagi warga desa tetapi juga berperan penting dalam menjaga ketahanan pangan lokal. 
                </p>
            </div>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection