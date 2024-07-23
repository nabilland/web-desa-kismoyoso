@extends('layouts.layout')

@section('breadcrumbs')
<h2>Potensi Desa</h2>
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

        <div class="row">

            <div class="col-lg-4">
                <a href="{{ route('potensi-pertanian') }}">
                    <div class="box" data-aos="fade-up">
                        <span>01</span>
                        <h4>Pertanian</h4>
                        <p>Tanaman padi merupakan komoditas utama yang dihasilkan.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up" data-aos-delay="100">
                    <span>02</span>
                    <h4>ABC</h4>
                    <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <span>03</span>
                    <h4>ABC</h4>
                    <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection