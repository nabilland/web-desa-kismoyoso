@extends('layouts.layout')

@section('breadcrumbs')
<h2>Berita</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Berita</li>
</ol>
@endsection


@section('contents')
<section id="why-us" class="why-us">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>BERITA</h2>
            <h3>Apa Saja Kegiatan KKN UNS di <span>Desa Kismoyoso</span>?</h3>
            <p>Kegiatan mahasiswa KKN Kelompok 37 & 38 Universitas Sebelas Maret (UNS) Membangun Desa Periode Juli-Agustus 2024 diantaranya adalah</p>
        </div>

        <div class="row">
            <!-- proker 37 -->
            <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/sosialisasi-sampah.jpg') }}" alt="" class="img-fluid">
                        <h4>Sosialisasi Pemilahan Sampah Rumah Tangga</h4>
                        <p> Kegiatan sosialisasi ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong>Kegiatan ini dilaksanakan di Kantor PKK Balai Desa Kismoyoso dan dihadiri oleh ibu-ibu PKK setempat.</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ecoprint.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- baris dua -->
            <!-- proker 38 -->
            <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                        <h4>Revitalisasi Kebun Gizi Lembayung</h4>
                        <p>Revitalisasi ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Kegiatan ini dilaksanakan di Kebun Gizi Lembayung yang berlokasi di .... </p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/mewarnai.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ebt.jpg') }}" alt="" class="img-fluid">
                        <h4>Energi Baru Terbarukan</h4>
                        <p> blablablabla </p>
                        <br>
                    </div>
                </a>
            </div>

            <!-- proker 37 -->
            <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> Kebun Gizi ini berdiri sejak Agustus 2022. Kebun ini berlokasi di Tambas RT 003/RW 007, dan diklaim menjadi Kebun Gizi terbesar se-Boyolali. </p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ecoprint.jpg') }}" alt="" class="img-fluid">
                        <h4>Praktik Pembuatan Ecoprint</h4>
                        <p>Kegiatan ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Praktik pembuatan ecoprint menggunakan media totebag ini dilaksanakan di SDN 03 Kismoyoso, dan diikuti oleh murid kelas 4 dan 5</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ecoprint.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p>Kegiatan ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Praktik pembuatan lilin aromaterapi dari minyak jelantah ini dilakukan untuk meningkatkan kualitas produk UMKM itu sendiri. UMKM lilin itu sendiri berlokasi di Dusun Padasan</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/lilin.jpg') }}" alt="" class="img-fluid">
                        <h4>Pembuatan Lilin Aromaterapi dari Minyak Jelantah</h4>
                        <p>Kegiatan ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Praktik pembuatan lilin aromaterapi dari minyak jelantah ini dilakukan untuk meningkatkan kualitas produk UMKM itu sendiri. UMKM lilin itu sendiri berlokasi di Dusun Padasan</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/mewarnai.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> Kebun Gizi ini berdiri sejak Agustus 2022. Kebun ini berlokasi di Tambas RT 003/RW 007, dan diklaim menjadi Kebun Gizi terbesar se-Boyolali. </p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/mewarnai.jpg') }}" alt="" class="img-fluid">
                        <h4>Mewarnai dan Menggambar dengan Tema "Stop Bullying"</h4>
                        <p>Kegiatan ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Kegiatan menggambar dan mewarnai ini dilakukan di SDN 03 Kismoyoso dan diikuti seluruh murid SD dari kelas 1 sampai kelas 6. Untuk mewarnai dilakukan pada kelas 1 dan 2, sedangkan menggambar dilakukan di kelas 3 sampai 6.</p>
                        <br>
                    </div>
                </a>
            </div>

             <!-- proker 37 -->
             <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/herbarium.jpg') }}" alt="" class="img-fluid">
                        <h4>Pembuatan Herbarium</h4>
                        <p> Kegiatan pembuatan herbarium ini dilakukan oleh <strong>Kelompok 38 KKN UNS. </strong> Pembuatan herbarium dilaksanakan di SDN 03 Kismoyoso untuk kelas 5 SD. Siswa dibantu untuk merangkai bunga dan daun yang telah dikeringkan.</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ecoprint.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- baris dua -->
            <!-- proker 38 -->
            <div class="col-lg-4">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                        <h4>Rebranding Website Desa</h4>
                        <p>Pembuatan Website Desa Kismoyoso ini dilakukan oleh <strong>Gabungan Prodi Informatika Kelompok 37 dan 38 KKN UNS. </strong> Tujuan dari Rebranding ini sendiri dilakukan untuk memperbarui data desa.</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/mewarnai.jpg') }}" alt="" class="img-fluid">
                        <h4>Proker 37</h4>
                        <p> blm ada isi</p>
                        <br>
                    </div>
                </a>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                    <div class="box" data-aos="fade-up">
                        <img src="{{ asset('assets/img/ebt.jpg') }}" alt="" class="img-fluid">
                        <h4>Gebyar Kreativitas Siswa</h4>
                        <p> blablablabla </p>
                        <br>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection