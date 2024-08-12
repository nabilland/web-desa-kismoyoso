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
                        <a target="_blank" class="black-link" href="https://www.google.com/maps/place/Beran/@-7.5063578,110.7851609,18z/data=!4m7!3m6!1s0x2e7a136f67cca793:0x5fb0cc766f7c75c2!4b1!8m2!3d-7.5064349!4d110.7864215!16s%2Fg%2F11q965msmf?entry=ttu">
                            <li>
                                Dukuh Beran
                            </li>
                        </a>
                        <a target="_blank" class="black-link" href="https://www.google.com/maps/place/Tegalan,+Kismoyoso,+Ngemplak,+Boyolali+Regency,+Central+Java/@-7.508917,110.7994757,16z/data=!4m6!3m5!1s0x2e7a13ddf4c39e9b:0xef9c8da00446e019!8m2!3d-7.506581!4d110.800158!16s%2Fg%2F11f613wqgk?entry=ttu">
                            <li>Dukuh Tegalan</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Krikilan</li>
                        </a>
                    </ol>
                    <b>Dusun II</b>
                    <ol>
                        <a target="_blank" class="black-link" href="https://www.google.com/maps/place/Ngampo,+Kismoyoso,+Ngemplak,+Boyolali+Regency,+Central+Java/@-7.5027787,110.803937,16z/data=!3m1!4b1!4m6!3m5!1s0x2e7a13ded26e6dd5:0x21f546bd11f5b034!8m2!3d-7.5013239!4d110.8031382!16s%2Fg%2F11ghndnyfr?entry=ttu">
                            <li>Dukuh Ngampo</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Krajan</li>
                        </a>
                        <a target="_blank" class="black-link" href="https://www.google.com/maps/place/Masjid+At+Taubah+Grasak/@-7.5089988,110.7868037,18z/data=!4m10!1m2!2m1!1sgrasak+kismoyoso!3m6!1s0x2e7a13f8c8af428b:0x30458a25d3d3ea87!8m2!3d-7.5090056!4d110.7891829!15sChBncmFzYWsga2lzbW95b3NvkgEGbW9zcXVl4AEA!16s%2Fg%2F11ghpn1p9b?entry=ttu">
                            <li>Dukuh Grasak</li>
                        </a>
                    </ol>
                    <b>Dusun III</b>
                    <ol>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Jampen</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Tambas</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Karangpun</li>
                        </a>
                    </ol>
                    <b>Dusun IV</b>
                    <ol>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Gambirsari</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Ngingas</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Banjarejo</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Kedungdowo</li>
                        </a>
                        <a target="_blank" class="black-link" href="#">
                            <li>Dukuh Kedungmasan</li>
                        </a>
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