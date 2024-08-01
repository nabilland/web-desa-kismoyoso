@extends('layouts.layout')

@section('breadcrumbs')
<h2>Tauge</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
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
                            <img src="{{ asset('assets\img\tauge.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\tauge3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Tauge</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Produksi dan Penjualan Tauge</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Pertanian dan Hortikultura</li>
                        <li><strong>Kategori Produk</strong>: Sayuran Segar</li>
                        <li><strong>Pemilik</strong>: Ibu Siti Aminah</li>
                        <li><strong>Tahun Berdiri</strong>: 2010</li>
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
                <h2>Produksi Tauge</h2>
                <p style="text-align: justify;">
                    Produksi tauge di Desa Kismoyoso dilakukan dengan metode yang higienis dan efisien, memastikan kualitas tauge yang tinggi dan aman untuk dikonsumsi. Proses produksi dimulai dengan pemilihan biji kedelai yang berkualitas, yang kemudian direndam dalam air bersih hingga berkecambah. Proses perendaman dan penumbuhan dilakukan dalam kondisi yang terkontrol untuk memastikan tauge tumbuh dengan baik dan bebas dari kontaminasi.
                </p>
                <p style="text-align: justify;">
                    Para pengusaha tauge di Kismoyoso sangat memperhatikan kebersihan dan kualitas dalam setiap tahap produksi. Setelah tauge mencapai ukuran yang diinginkan, mereka dipanen dan dikemas dengan hati-hati untuk menjaga kesegarannya. Tauge dari Kismoyoso tidak hanya dijual di pasar lokal tetapi juga dipasok ke berbagai daerah, menunjukkan kepercayaan dan permintaan yang tinggi dari konsumen. Produksi tauge yang berkelanjutan dan berkualitas tinggi ini berkontribusi signifikan terhadap perekonomian desa dan kesejahteraan para petani lokal.
                </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection