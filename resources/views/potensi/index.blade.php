@extends('layouts.layout')

@section('breadcrumbs')
<h2>Potensi</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Potensi Desa</li>
</ol>
@endsection

@section('contents')
<section id="why-us" class="why-us">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Potensi</h2>
            <h3>Apa Saja Potensi <span>Desa Kismoyoso</span>?</h3>
            <p>Desa Kismoyoso memiliki berbagai potensi yang dapat dikembangkan untuk meningkatkan kesejahteraan masyarakat dan kemajuan desa.</p>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4">
                <a href="{{ route('potensi-pertanian') }}">
                    <div class="box" data-aos="fade-up">
                        <span>01</span>
                        <h4>Pertanian</h4>
                        <p>Tanaman padi merupakan komoditas utama yang dihasilkan.</p>
                        <br>
                        <br><br>
                    </div>
                </a>
            </div>

            <!-- <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="{{ route('potensi-perkebunan') }}">
                    <div class="box" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>Perkebunan</h4>
                        <p>Perkebunan di Desa Kismoyoso pada musim kemarau fokus pada tanaman jagung dan kacang tanah. Kedua komoditas ini dipilih karena kemampuannya bertahan dalam kondisi kekeringan.</p>
                    </div>
                </a>
            </div> -->

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('umkm') }}">
                    <div class="box">
                        <span>02</span>
                        <h4>UMKM</h4>
                        <p>UMKM di Desa Kismoyoso mencakup berbagai jenis usaha rumahan seperti jamu gendong, tauge, tahu, dan lainnya, yang mampu meningkatkan perekonomian desa serta menciptakan lapangan kerja bagi penduduk lokal.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection