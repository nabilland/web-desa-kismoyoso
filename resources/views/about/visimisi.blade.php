@extends('layouts.layout')

@section('breadcrumbs')
<h2>Visi & Misi</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Visi & Misi</li>
</ol>
@endsection

@section('contents')
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Visi</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">Terwujudnya sistem pemerintahan yang efektif sehingga mampu meningkatkan pelayanan dan kesejahteraan masyarakat.</p>
                </div>
            </div>
        </div>
        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Misi</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <ol type="a">
                        <li>Penyelenggaraan pemerintahan yang efektif dan efisien.</li>
                        <li>Pengembangan kemampuan administrasi pemerintah dan pembangunan.</li>
                        <li>Peningkatan pelayanan, pemberdayaan masyarakat dan kesejahteraan masyarakat.</li>
                    </ol>
                </div>
            </div>
        </div>
</section>
@endsection