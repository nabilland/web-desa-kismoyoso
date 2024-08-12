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
            <p>Kegiatan mahasiswa KKN Kelompok 37 & 38 Universitas Sebelas Maret (UNS) Membangun Desa Periode Juli-Agustus 2024</p>
        </div>

        <div class="row">
            <!-- proker 37 -->
            <div class="col-lg-4">
                <div class="box mb-2" data-aos="fade-up">
                    <img src="{{ asset('assets/img/toga.jpg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Kebun TOGA (Tanaman Obat Keluarga)</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di SD Negeri 2 Kismoyoso dan diikuti oleh seluruh peserta didik kelas 5. Peserta didik tidak hanya diberikan pemahaman tentang TOGA, tetapi juga diajak untuk berinteraksi langsung dengan menanam berbagai jenis tanaman obat.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/sosialisasi-sampah.jpg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Pemilahan Sampah Rumah Tangga</h4>
                    <p> Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong>Kegiatan ini dilaksanakan di Kantor PKK Balai Desa Kismoyoso dan dihadiri oleh ibu-ibu PKK setempat.</p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/ecoprint37.jpg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Pembuatan Ecoprint</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di SD Negeri 2 Kismoyoso dan diikuti oleh seluruh peserta didik kelas 4. Peserta didik tidak hanya diberikan pemahaman tentang <i>ecoprint</i> dengan teknik <i>pounding</i>, tetapi juga berinteraksi langsung dengan membuat <i>ecoprint</i> di atas media tas jinjing (<i>tote bag</i>).</p>
                    <br>
                </div>
            </div>
            <!-- baris dua -->
            <!-- proker 38 -->
            <div class="col-lg-4">
                <div class="box mb-2" data-aos="fade-up">
                    <img src="{{ asset('assets/img/kebun.jpg') }}" alt="" class="img-fluid">
                    <h4>Revitalisasi Kebun Gizi Lembayung</h4>
                    <p>Revitalisasi ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong> Kegiatan ini dilaksanakan di Kebun Gizi Lembayung yang berlokasi di .... </p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box mb-2" data-aos="fade-up">
                    <img src="{{ asset('assets/img/sosil-sampah.jpeg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Pemanfaatan Barang Bekas</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di SD Negeri 2 Kismoyoso dan diikuti oleh seluruh peserta didik kelas 4. Peserta didik diberikan pemahaman tentang pemanfaatan barang bekas menjadi barang yang memiliki nilai kembali.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">

                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/ebt.jpg') }}" alt="" class="img-fluid">
                    <h4>Energi Baru Terbarukan</h4>
                    <p> blablablabla </p>
                    <br>
                </div>
            </div>

            <!-- proker 37 -->
            <div class="col-lg-4">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/celengan.jpeg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Pembuatan Celengan dari Barang Bekas</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di SD Negeri 2 Kismoyoso dan diikuti oleh seluruh peserta didik kelas 4. Peserta didik berkreasi dengan membuat karya nerupa celengan bekas dengan memanfaatkan botol plastik bekas air mineral.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/ecoprint.jpg') }}" alt="" class="img-fluid">
                    <h4>Praktik Pembuatan Ecoprint</h4>
                    <p>Kegiatan ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong> Praktik pembuatan ecoprint menggunakan media totebag ini dilaksanakan di SDN 03 Kismoyoso, dan diikuti oleh murid kelas 4 dan 5</p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box mb-2" data-aos="fade-up">
                    <img src="{{ asset('assets/img/pupuk.jpeg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Pembuatan Pupuk Cair untuk Tanaman Padi</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di Dusun Beran dan diikuti oleh warga Dusun Beran. Warga menyaksiksan demo pembuatan pupuk cair untuk tanaman padi dari awal hingga akhir dengan saksama.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/lilin.jpg') }}" alt="" class="img-fluid">
                    <h4>Pembuatan Lilin Aromaterapi dari Minyak Jelantah</h4>
                    <p>Kegiatan ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong> Praktik pembuatan lilin aromaterapi dari minyak jelantah ini dilakukan untuk meningkatkan kualitas produk UMKM itu sendiri. UMKM lilin itu sendiri berlokasi di Dusun Padasan</p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/omah-sinau.jpeg') }}" alt="" class="img-fluid">
                    <h4>Omah Sinau</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan untuk peserta didik kelas 6 SD Negeri 1 Kismoyoso dan SD Negeri 2 Kismoyoso. Peserta didik mendapatkan bimbingan belajar untuk mata pelajaran Matematika, IPA, Bahasa Inggris, dan Pendidikan Kewarganegaraan.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mb-2 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/mewarnai.jpg') }}" alt="" class="img-fluid">
                    <h4>Mewarnai dan Menggambar dengan Tema "Stop Bullying"</h4>
                    <p>Kegiatan ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong> Kegiatan menggambar dan mewarnai ini dilakukan di SDN 03 Kismoyoso dan diikuti seluruh murid SD dari kelas 1 sampai kelas 6. Untuk mewarnai dilakukan pada kelas 1 dan 2, sedangkan menggambar dilakukan di kelas 3 sampai 6.</p>
                    <br>
                </div>
            </div>

            <!-- proker 37 -->
            <div class="col-lg-4">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/.jpg') }}" alt="" class="img-fluid">
                    <h4>Pembuatan Peta Penggunaan Lahan Desa Kismoyoso</h4>
                    <p>Pembuatan peta penggunaan lahan ini diinisiasi oleh <strong>Kelompok 37 KKN UNS </strong> yang dipersembahkan untuk Pemerintah Desa Kismoyoso. Pembuatan peta mencakup gambaran penggunaan lahan Dusun I, II, III, dan IV di Desa Kismoyoso.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/herbarium.jpg') }}" alt="" class="img-fluid">
                    <h4>Pembuatan Herbarium</h4>
                    <p> Kegiatan pembuatan herbarium ini diinisiasi oleh <strong>Kelompok 38 KKN UNS. </strong> Pembuatan herbarium dilaksanakan di SDN 03 Kismoyoso untuk kelas 5 SD. Siswa dibantu untuk merangkai bunga dan daun yang telah dikeringkan.</p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mb-2 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/kebun-krikilan.jpeg') }}" alt="" class="img-fluid">
                    <h4>Pengembangan Kebun Gizi</h4>
                    <p>Pengembangan kebun gizi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di Kebun Gizi Dusun Krikilan. Tim KKN 37 UNS bersama warga mengembangkan kebun gizi di atas lahan milik umum yang dapat digunakan untuk meningkatkan kesejahteraan warga.</p>
                    <br>
                </div>
            </div>
            <!-- baris dua -->
            <!-- proker 38 -->
            <div class="col-lg-4">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/web.jpg') }}" alt="" class="img-fluid">
                    <h4>Rebranding Website Desa</h4>
                    <p>Pembuatan website Desa Kismoyoso ini diinisiasi oleh <strong>Gabungan Prodi Informatika Kelompok 37 dan 38 KKN UNS </strong> yang dipersembahkan untuk Pemerintah Desa Kismoyoso. Tujuan dari rebranding ini sendiri dilakukan untuk meningkatkan fungsionalitas website yang sudah ada dan menyediakan platform penghubung Desa Kismoyoso dengan masyarakat lokal maupun umum.</p>
                    <br>
                </div>
            </div>
            <!-- proker 37 -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/.jpg') }}" alt="" class="img-fluid">
                    <h4>Sosialisasi Roket Air</h4>
                    <p>Kegiatan sosialisasi ini diinisiasi oleh <strong>Kelompok 37 KKN UNS. </strong>Kegiatan ini dilaksanakan di SD Negeri 1 Kismoyoso dan diikuti oleh seluruh peserta didik kelas 6. Peserta didik tidak hanya diberikan pemahaman tentang pembuatan dan cara kerja roket air, tetapi juga diajak untuk berinteraksi langsung dengan membuat roket dari botol plastik bekas air mineral.</p>
                    <br>
                </div>
            </div>
            <!-- proker 38 -->
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box" data-aos="fade-up">
                    <img src="{{ asset('assets/img/ebt.jpg') }}" alt="" class="img-fluid">
                    <h4>Gebyar Kreativitas Siswa</h4>
                    <p> blablablabla </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection