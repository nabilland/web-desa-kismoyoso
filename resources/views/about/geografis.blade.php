@extends('layouts.layout')

@section('breadcrumbs')
<h2>Informasi Geografis</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Informasi Geografis</li>
</ol>
@endsection

@section('contents')
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Lokasi Geografis</h2>
                <div class="mb-3">
                    <img src="{{ asset('assets/img/map.gif') }}" width="60%" alt="">
                </div>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        <b>Desa Kismoyoso</b> terletak di Kecamatan Ngemplak, Kabupaten Boyolali, Provinsi Jawa Tengah. Desa ini memiliki kode wilayah 3309112008 dan kode pos 57375. Secara administratif, Desa Kismoyoso berada dalam wilayah kode kecamatan 330911 dan kode kabupaten 3309.
                    </p>
                    <p style="text-align: justify;">
                        <b>Desa Kismoyoso</b> memiliki luas wilayah total sekitar 3.706,206 hektar, yang terdiri dari 1.395,075 hektar lahan desa, termasuk 50,121 hektar tanah kas desa dan 189,302 hektar tanah bengkok perangkat desa. Wilayah desa ini membentang dari barat ke timur sejauh 5 km dan dari utara ke selatan juga sejauh 5 km.
                    </p>
                    <p style="text-align: justify;">
                        Batas wilayah Desa Kismoyoso adalah sebagai berikut:
                    </p>
                    <ul>
                        <li><b>Utara:</b> Berbatasan dengan Desa Giriroto</li>
                        <li><b>Selatan:</b> Berbatasan dengan Desa Donohudan dan Desa Pandeyan</li>
                        <li><b>Barat:</b> Berbatasan dengan Desa Dibal</li>
                        <li><b>Timur:</b> Berbatasan dengan Kabupaten Karanganyar</li>
                    </ul>
                    <p style="text-align: justify;">
                        Kismoyoso adalah salah satu desa di wilayah Kabupaten Boyolali yang kaya akan potensi alam dan budaya. Desa ini berada di kawasan yang strategis dengan akses yang baik menuju berbagai fasilitas umum, baik di tingkat kecamatan maupun kabupaten. Letak geografisnya yang berada di tengah-tengah Provinsi Jawa Tengah memberikan kemudahan bagi masyarakat desa untuk berinteraksi dan berhubungan dengan wilayah lain di sekitarnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Pembagian Wilayah</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        <b>Desa Kismoyoso</b> terdiri dari empat wilayah kadusunan yang masing-masing dipimpin oleh seorang Kepala Dusun. Setiap dusun mencakup beberapa dukuh, yang merupakan unit terkecil dalam pembagian administratif desa. Berikut adalah pembagian wilayah berdasarkan kadusunan di <b>Desa Kismoyoso</b>:
                    </p>
                    <b>Dusun I</b>
                    <ol>
                        <li>Dukuh Beran</li>
                        <li>Dukuh Tegalan</li>
                        <li>Dukuh Krikilan</li>
                    </ol>
                    <b>Dusun II</b>
                    <ol>
                        <li>Dukuh Ngampo</li>
                        <li>Dukuh Krajan</li>
                        <li>Dukuh Grasak</li>
                    </ol>
                    <b>Dusun III</b>
                    <ol>
                        <li>Dukuh Jampen</li>
                        <li>Dukuh Tambas</li>
                        <li>Dukuh Karangpun</li>
                    </ol>
                    <b>Dusun IV</b>
                    <ol>
                        <li>Dukuh Gambirsari</li>
                        <li>Dukuh Ngingas</li>
                        <li>Dukuh Banjarejo</li>
                        <li>Dukuh Kedungdowo</li>
                        <li>Dukuh Kedungmasan</li>
                    </ol>
                    <p style="text-align: justify;">
                        Setiap dusun di <b>Desa Kismoyoso</b> memiliki karakteristik dan potensi masing-masing, yang turut mendukung kehidupan sosial dan ekonomi masyarakat desa. Pembagian wilayah ini juga mempermudah koordinasi dalam pemerintahan desa dan penyelenggaraan pelayanan publik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection