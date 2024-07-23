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
                            <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" alt="">
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
                    <h3>Informasi Potensi Pertanian</h3>
                    <ul>
                        <li><strong>Komoditas</strong>: Padi</li>
                        <li><strong>Luas Lahan Pertanian</strong>: 443,23 Ha</li>
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
                <h2>Title</h2>
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
            </div>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection