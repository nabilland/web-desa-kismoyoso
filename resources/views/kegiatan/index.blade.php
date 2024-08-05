@extends('layouts.layout')

@section('breadcrumbs')
<h2>Potensi Desa</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Kegiatan</li>
    <li>Kebun Gizi</li>
</ol>
@endsection

@section('contents')
<section id="why-us" class="why-us">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Kebun Gizi</h2>
            <h3>Apa Saja Kebun Gizi di <span>Desa Kismoyoso</span>?</h3>
            <p>Desa Kismoyoso memiliki berbagai kebun gizi yang menjadi daya tarik utama Desa Kismoyoso dan dapat dikembangkan untuk meningkatkan kesejahteraan masyarakat dan kemajuan desa.</p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <a href="{{ route('kebun-gizi-lembayung') }}">
                    <div class="box" data-aos="fade-up">
                        <span>01</span>
                        <h4>Kebun Gizi Lembayung</h4>
                        <p> Kebun Gizi ini berdiri sejak Agustus 2022. Kebun ini berlokasi di Tambas RT 003/RW 007, dan diklaim menjadi Kebun Gizi terbesar se-Boyolali. </p>
                        <br>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="{{ route('kebun-gizi-sawi') }}">
                    <div class="box" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>Kebun Gizi Sawi</h4>
                        <p> Kebun Gizi ini berdiri sejak akhir 2022. Kebun ini berlokasi di Tegalan RT 003/RW 001. Kebun Gizi ini dinaungi oleh PKK Sentosa Makmur</p>
                        <br>
                    </div> 
                </a>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('kebun-gizi-bayam') }}">
                <div class="box">
                    <span>03</span>
                    <h4>Kebun Gizi Bayam</h4>
                    <p> Kebun Gizi ini berdiri sejak akhir 2022. Kebun ini berlokasi di Krikilan RT 004/RW 002, dan terletak di dekat Middle Marker (MM) alat navigasi pesawat bandara Adi Soemarmo </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection