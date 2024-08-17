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
                    <p style="text-align: justify;">Terwujudnya masyarakat yang aman, tentram dan sejahtera.</p>
                </div>
            </div>
        </div>
        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Misi</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <ol type="1">
                        <li>Penyelenggaraan pemerintah dan pembangunan yang bersih dan transparan.</li>
                        <li>Peningkatan pelayanan dan kesejahteraan masyarakat.</li>
                        <li>Pemberdayaan masyarakat lembaga desa dan organisasi sosial Desa.</li>
                        <li>Skala prioritas dan efektifitas APB Desa.</li>
                        <li>Peningkatan kemampuan administrasi tanggap informasi dari pemerintah untuk masyarakat dan pembangunan manusia Indonesia seutuhnya.</li>
                        <li>Meningkatkan panca usaha tani dalam peningkatan produksi pertanian.</li>
                        <li>Mengikutsertakan anggota kelompok tani dalam program SLPHT (Sekolah Lapang Pengendalian Hama Terpadu) dan PTT.</li>
                    </ol>
                </div>
            </div>
        </div>
</section>
@endsection