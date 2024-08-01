@extends('layouts.layout')

@section('breadcrumbs')
<h2>Tahu</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Tahu</li>
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
                            <img src="{{ asset('assets\img\tahu.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tahu2.jpeg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tahu.jpeg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Tahu</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Produksi dan Penjualan Tahu</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Industri Pengolahan Makanan</li>
                        <li><strong>Kategori Produk</strong>:  Produk Olahan Kedelai</li>
                        <li><strong>Pemilik</strong>: Bapak Sutrisno</li>
                        <li><strong>Tahun Berdiri</strong>: 2005</li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="#">
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
                                <!-- <a href="tel:6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-phone" style="padding-right:2px"></i>
                                        Hubungi</button>
                                </a> -->
                            </li>
                        </div>
                        <li><strong>Prestasi</strong>: UMKM Unggulan</li>
                    </ul>
                    <h3 style="padding-top:20px;">Paguyuban UMKM</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
            <h2>Produksi Tahu</h2>
            <p style="text-align: justify;">
                Produksi tahu di Desa Kismoyoso dilakukan dengan metode tradisional yang telah diwariskan secara turun-temurun. Proses pembuatan tahu dimulai dengan pemilihan kedelai berkualitas tinggi, yang kemudian direndam dan digiling untuk menghasilkan bubur kedelai. Bubur kedelai ini kemudian dimasak dan dicampur dengan koagulan alami untuk membentuk gumpalan tahu. Gumpalan tersebut diperas dan dicetak untuk menghasilkan tahu dengan tekstur yang lembut dan cita rasa yang khas.
            </p>
            <p style="text-align: justify;">
                Para pengusaha tahu di Kismoyoso sangat memperhatikan kebersihan dan kualitas dalam setiap tahap produksi. Penggunaan bahan-bahan alami tanpa bahan pengawet membuat tahu Kismoyoso dikenal sehat dan aman dikonsumsi. Selain dijual di pasar lokal, tahu produksi Kismoyoso juga telah merambah ke berbagai daerah, menunjukkan kualitas dan kepercayaan konsumen terhadap produk ini. Dengan demikian, produksi tahu menjadi salah satu tulang punggung ekonomi desa yang memberikan kontribusi signifikan bagi kesejahteraan masyarakat setempat.
            </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection