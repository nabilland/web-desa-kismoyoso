@extends('layouts.layout')

@section('breadcrumbs')
<h2>Struktur Organisasi Pemerintah Desa</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Struktur Pemerintahan</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container">
        <img src="{{ asset('assets/img/struktur.png') }}" width="50%" alt="">
    </div>
    <div class="container grey-block p-3 mt-3" data-aos="fade-in">
        <p style="text-align: justify;">
            Struktur pemerintahan <b>Desa Kismoyoso</b> adalah sebagai berikut.
        </p>
        <b>Badan Permusyawaratan Desa (BPD)</b>
        <p style="text-align: justify;">
            BPD adalah lembaga perwakilan rakyat desa yang berfungsi sebagai forum pengambilan keputusan penting dalam desa, termasuk membuat dan menyetujui peraturan desa serta mengawasi jalannya pemerintahan desa.
        </p>
        <b>Kepala Desa</b>
        <p style="text-align: justify;">
            Kepala Desa adalah pimpinan tertinggi dalam pemerintahan desa yang bertanggung jawab atas jalannya pemerintahan dan pelaksanaan pembangunan di desa.
        </p>
        <b>Sekretaris Desa</b>
        <p style="text-align: justify;">
            Sekretaris Desa berada di bawah Kepala Desa dan bertugas membantu Kepala Desa dalam menjalankan administrasi pemerintahan desa serta mengoordinasikan tugas-tugas perangkat desa.
        </p>
        <b>Kepala Urusan</b>
        <p style="text-align: justify;">
            Ada tiga Kepala Urusan yang masing-masing memimpin bidang spesifik dalam pemerintahan desa:
        </p>
        <ul>
            <li>
                <b>Kepala Urusan Pemerintahan</b>: Bertanggung jawab atas administrasi dan urusan pemerintahan desa.
            </li>
            <li>
                <b>Kepala Urusan Kesejahteraan Rakyat</b>: Mengurusi masalah sosial dan kesejahteraan warga desa.
            </li>
            <li>
                <b>Kepala Urusan Pembangunan</b>: Mengelola dan mengawasi proyek pembangunan di desa.
            </li>
        </ul>
        <b>Kepala Dusun</b>
        <p style="text-align: justify;">
            Di bawah Kepala Desa dan Kepala Urusan, terdapat Kepala Dusun yang memimpin beberapa dusun di desa. Kepala Dusun bertugas mengurus masalah-masalah administratif dan keseharian masyarakat di dusunnya masing-masing serta menjadi perpanjangan tangan pemerintahan desa dalam memberikan pelayanan kepada warga.
        </p>
    </div>
</section>
@endsection