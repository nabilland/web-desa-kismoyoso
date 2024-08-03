@extends('layouts.layout')

@section('breadcrumbs')
<h2>Perkebunan</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ route('potensi') }}">Potensi Desa</a></li>
    <li>Perkebunan</a></li>
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
                    <h3>Informasi Potensi Perkebunan</h3>
                    <ul>
                        <li><strong>Komoditas</strong>: Jagung, Kacang Tanah </li>
                        <li><strong>Luas Lahan Perkebunan</strong>: 150 Ha</li>
                        <li><strong>Musim Tanam</strong>: Musim Kemarau</li>
                        <li><strong>Nilai Ekonomis</strong>: Jagung untuk pangan dan pakan, kacang tanah untuk produk olahan</li>
                    </ul>
                    <!-- <h3 style="padding-top:20px;">Komunitas Petani</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div> -->
                </div>
            </div>
            <div class="portfolio-description">
                <h2>Perkebunan di Desa Kismoyoso</h2>
                <p style="text-align: justify;">
                    Pada musim kemarau, lahan pertanian beralih untuk menanam jagung dan kacang tanah. Kedua tanaman ini dipilih karena kemampuannya untuk tumbuh dengan baik dalam kondisi kekeringan relatif. Jagung dan kacang tanah merupakan komoditas penting yang membantu diversifikasi hasil pertanian dan mendukung ketahanan pangan desa. Penanaman jagung dan kacang tanah juga berperan dalam mengoptimalkan penggunaan lahan selama periode kekurangan air, memastikan bahwa petani tetap dapat memproduksi hasil pertanian yang berharga.
                </p>

                <p style="text-align: justify;">
                    Selain itu, jagung dan kacang tanah memiliki nilai ekonomis yang signifikan. Jagung sering digunakan sebagai bahan pangan dan pakan ternak, sedangkan kacang tanah bisa diproses menjadi berbagai produk olahan makanan yang bernilai tinggi. Pengelolaan yang efektif terhadap kedua tanaman ini tidak hanya mendukung ekonomi desa tetapi juga berkontribusi pada keberlanjutan praktik pertanian yang ramah lingkungan. Dengan strategi pertanian yang adaptif dan berkelanjutan, Desa Kismoyoso dapat terus memanfaatkan potensi lahan mereka secara optimal.
                </p>
            </div>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection