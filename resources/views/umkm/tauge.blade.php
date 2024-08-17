@extends('layouts.layout')

@section('breadcrumbs')
<h2>Tauge</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#umkm')}}">UMKM</a></li>
    <li>Tauge</li>
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
                            <img src="{{ asset('assets\img\tauge 6.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge5.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge 4.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Tauge Ibu Waljinah</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Produksi dan Penjualan Tauge</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Pertanian dan Hortikultura</li>
                        <li><strong>Kategori Produk</strong>: Sayuran Segar</li>
                        <li><strong>Pemilik</strong>: Ibu Waljinah</li>
                        <li><strong>Tahun Berdiri</strong>: 2010</li>
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
                            <li><strong>Kontak</strong>: +6283-865-659-060
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6283865659060">
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
                <h2>Produksi Tauge</h2>
                <p style="text-align: justify;">
                    Ibu Waljinah, seorang warga Desa Kismoyoso, telah berjualan tauge selama 14 tahun terakhir di Pasar Gagan. Proses pembuatan tauge yang beliau lakukan dimulai dengan mencuci kacang hijau hingga bersih, merendamnya selama 8 jam, dan menyiramnya setiap 3 jam. Dalam tiga hingga empat hari, tauge siap dipanen dan dijual.
                </p>
                <p style="text-align: justify;">
                    Ibu Waljinah memproduksi berbagai jenis tauge, termasuk tauge dari kedelai, tauge dari kacang hijau kecil yang sering digunakan dalam masakan seperti rawon dan soto, serta tauge panjang yang menjadi bahan utama dalam hidangan seperti ketoprak dan lainnya. Setiap hari, beliau berangkat ke Pasar Gagan pada pukul 3 pagi untuk menjual tauge hasil produksinya. Setelah selesai berjualan sekitar pukul 7 pagi, Ibu Waljinah kembali ke rumah untuk melanjutkan proses produksi tauge.
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