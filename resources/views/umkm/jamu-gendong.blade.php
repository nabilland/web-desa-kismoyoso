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
                        <li><strong>Jenis Kegiatan Usaha</strong>: Menengah</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Pangan dan Minuman</li>
                        <li><strong>Kategori Produk</strong>: Minuman Kesehatan, Produk Herbal, atau Minuman Tradisional</li>
                        <li><strong>Produk Unggulan</strong>: Jamu</li>
                        <li><strong>Pemilik</strong>: John Doe</li>
                        <li><strong>Tahun Berdiri</strong>: 01 March, 2020</li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://maps.app.goo.gl/aAhqAjLrdufsVKbc9">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>:
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        Chat via WhatsApp</button>
                                </a>
                                <a href="tel:6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-phone" style="padding-right:2px"></i>
                                        Hubungi</button>
                                </a>
                            </li>
                        </div>
                        <li><strong>Prestasi</strong>: UMKM Unggulan</li>
                    </ul>
                    <h3 style="padding-top:20px;">Informasi Paguyuban UMKM</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div>
                </div>
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