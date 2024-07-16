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
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Jamu Gendong</li>
                        <li><strong>Jenis Usaha</strong>: Menengah</li>
                        <li><strong>Kategori Produk</strong>: Kuliner</li>
                        <li><strong>Produk Unggulan</strong>: Jamu</li>
                        <li><strong>Pemilik</strong>: John Doe</li>
                        <li><strong>Tahun Berdiri</strong>: 01 March, 2020</li>
                        <li><strong>Lokasi</strong>: https://maps.app.goo.gl/aAhqAjLrdufsVKbc9</li>
                        <li><strong>Kontak</strong>: <a href="#">www.example.com</a></li>
                        <li><strong>Prestasi</strong>: UMKM Unggulan</li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Jamu Gendong XYZ</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection