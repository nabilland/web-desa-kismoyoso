@extends('layouts.layout')

@section('breadcrumbs')
<h2>Kebun Gizi Lembayung</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ route('kebun-gizi') }}">Kebun Gizi</a></li>
    <li>Kebun Gizi Lembayung</li>
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
                            <img src="{{ asset('assets/img/kebungizi-lembayung.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-lembayung5.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-lembayung2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-lembayung3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/kebungizi-lembayung4.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi Kebun Gizi</h3>
                    <ul>
                         <li><strong>Nama </strong>: Kebun Gizi Lembayung</li>
                        <li><strong>Jenis Kegiatan</strong>: Budidaya tanaman yang bernilai gizi</li>
                        <li><strong>Bidang Kegiatan</strong>: Pertanian dan kesehatan</li>
                        <li><strong>Kategori </strong>: Sayuran organik dan bahan pangan sehat </li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.co.id/maps/place/Taman+gizi+lembayung/@-7.5062923,110.7990909,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a13b92d1458a9:0x486953d6398cfed4!8m2!3d-7.5062923!4d110.8016658!16s%2Fg%2F11s5n_96b8?authuser=2&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <!-- <li><strong>Pemilik</strong>: John Doe</li> -->
                        <li><strong>Tahun Berdiri</strong>: Agustus 2022</li>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>: +6281-234-567-891
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281234567891">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        WhatsApp</button>
                                </a>
                            </li>
                        </div>
                        <li><strong>Prestasi</strong>: Juara 1 Kebun Gizi Se-Kismoyoso</li>
                        <h3 style="padding-top:20px;">Paguyuban Kebun Gizi</h3>
                        <div class="d-flex">
                            <button class="green-button">
                                <i class="bx bx-info-circle" style="padding-right:2px"></i>
                                Lihat Informasi Selengkapnya
                            </button>
                        </div>
                        </div>
                    </ul>
                    
                </div>
            </div>
            <div class="portfolio-description">
                <h2>Kenal Lebih Dekat dengan Kebun Gizi Lembayung</h2>
                <p style="text-align: justify;"> 
                     Kebun Gizi Lembayung di Desa Kismoyoso, berdiri sejak 2022. Kebun ini berlokasi di Tambas RT 003/RW 007, dan diklaim menjadi Kebun Gizi terbesar se-Boyolali. Kebun Gizi Lembayung berfokus pada peningkatan kesejahteraan masyarakat melalui pertanian berkelanjutan dan edukasi gizi dibantu dengan ibu-ibu PKK (Pemberdayaan dan Kesejahteraan Keluarga) setempat. 
                </p>

                <p style="text-align: justify;">
                Ketua Tim Penggerak PKK Desa Kismoyoso mengungkapkan ada lebih dari 58 jenis tanaman tumbuh dan ditanam di Kebun Gizi Lembayung. Pada kebun ini terdapat berbagai sayuran organik, bahan pangan, tanam obat, dan buah-buahan seperti timun, kangkung, bayam, lembayung, cabai, tomat, dan sebagainya. Kegiatan utamanya mencakup produksi sayuran organik dan herbal berkualitas tinggi serta edukasi masyarakat tentang gizi dan gaya hidup sehat. Dikenal sebagai "Kebun Gizi Unggulan," kebun ini terus berkomitmen untuk melakukan praktik pertanian berkelanjutan. Dengan adanya Kebun Gizi ini Warga bisa mengambil hasil tanaman di Kebun Gizi Lembayung secara cuma-cuma alias gratis.
                </p>
            </div>
        </div>


    </div>
</section><!-- End Portfolio Details Section -->
@endsection