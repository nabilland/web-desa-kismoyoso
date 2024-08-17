@extends('layouts.layout')

@section('breadcrumbs')
<h2>Gamelan</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Gamelan</li>
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
                            <img src="{{ asset('assets\img\gamelan.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gamelan3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gamelan4.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gamelan2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gamelan5.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Gamelan Pak Samijan</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Produksi Gamelan dan Gong</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Industri Kerajinan dan Seni Tradisional</li>
                        <li><strong>Kategori Produk</strong>: Alat Musik Tradisional Gamelan dan Gong</li>
                        <li><strong>Pemilik</strong>: Pak Samijan</li>
                        <li><strong>Tahun Berdiri</strong>: 2004 </li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.co.id/maps/place/Toge+Waljinah/@-7.505473,110.7852953,19z/data=!3m1!4b1!4m6!3m5!1s0x2e7a13e34f9715db:0x6f772cc190295f53!8m2!3d-7.505473!4d110.785939!16s%2Fg%2F11qmqplnxw?entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>: +62813-9258-8903
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281392588903">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        Chat via WhatsApp</button>
                                </a>
                            </li>
                        </div>
                        <!-- <li><strong>Prestasi</strong>: UMKM Unggulan</li> -->
                    </ul>

                </div>
            </div>
            <div class="portfolio-description">
                <h2>Produksi Gamelan</h2>
                <p style="text-align: justify;">
                    Pak Samijan, seorang pengrajin gamelan dari Kismoyoso, telah memproduksi gamelan berkualitas tinggi sejak tahun 2004. Beliau menggunakan bahan perak dan tembaga untuk membuat alat musik tradisional ini. Proses pembuatan dimulai dengan menempanya menggunakan api panas, kemudian direndam dalam air untuk memperkuat materialnya. Jika bunyi yang dihasilkan belum sesuai, gamelan akan ditempa ulang hingga mencapai nada yang diinginkan.
                </p>
                <p style="text-align: justify;">
                    Pak Samijan menawarkan berbagai ukuran gamelan dengan harga yang bervariasi. Gong kecil dibanderol dengan harga Rp 5 juta, sementara yang besar mencapai Rp 12 juta. Untuk gamelan balungan, harga unit kecil adalah Rp 10 juta, sedangkan yang besar dijual seharga Rp 12 juta. Produk-produknya tidak hanya diminati oleh masyarakat lokal, tetapi juga oleh pembeli dari luar daerah seperti Pati, Jakarta, Surabaya, dan yang paling banyak dari Sragen.
                </p>
                <p style="text-align: justify;">
                    <b>Ingin tahu lebih banyak atau pesan produk?</b> Hubungi WhatsApp sekarang atau datang langsung ke lokasi yang ada di peta!
                </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection