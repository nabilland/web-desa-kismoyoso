@extends('layouts.layout')

@section('breadcrumbs')
<h2>Sejarah Desa</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Sejarah Desa</li>
</ol>
@endsection

@section('contents')
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Sekilas Tentang Desa Kismoyoso</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        Desa Kismoyoso terletak di Kecamatan Ngemplak, Kabupaten Boyolali, Jawa Tengah. Desa ini dikenal dengan kekayaan alamnya dan memiliki sejarah panjang yang terkait erat dengan perkembangan pertanian di wilayah tersebut. Nama "Kismoyoso" diyakini berasal dari bahasa Jawa kuno, di mana "Kismo" berarti tanah atau lahan, dan "Yoso" berarti membangun atau mengembangkan, mencerminkan masyarakat yang berfokus pada pengembangan dan pengolahan lahan.
                    </p>
                </div>
            </div>
        </div>

        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Sejarah Awal</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        Pada awalnya, Desa Kismoyoso adalah sebuah hutan belantara yang kemudian dibuka oleh para pendatang untuk dijadikan lahan pertanian. Para pendatang ini datang dari berbagai daerah di Jawa Tengah, mencari lahan subur untuk bercocok tanam. Mereka mendirikan permukiman sederhana dan mulai mengolah tanah dengan metode tradisional.
                    </p>
                </div>
            </div>
        </div>

        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Masa Kolonial</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        Pada masa kolonial Belanda, Desa Kismoyoso mengalami perubahan signifikan. Belanda memperkenalkan sistem irigasi modern yang memungkinkan petani untuk menanam padi sepanjang tahun. Selain itu, pemerintah kolonial juga mendorong diversifikasi tanaman dengan memperkenalkan jagung dan kacang tanah sebagai alternatif tanaman saat musim kemarau. Hal ini meningkatkan produktivitas pertanian dan kesejahteraan masyarakat desa.
                    </p>
                </div>
            </div>
        </div>

        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Masa Kemerdekaan</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                    Setelah Indonesia merdeka pada tahun 1945, Desa Kismoyoso menjadi bagian dari Kabupaten Boyolali. Pada masa ini, pemerintah Indonesia melanjutkan program irigasi yang telah dirintis oleh Belanda dan memperkenalkan teknologi pertanian baru. Desa ini menjadi salah satu pusat pertanian di Kabupaten Boyolali, dengan mayoritas penduduknya bekerja sebagai petani.
                    </p>
                </div>
            </div>
        </div>

        <div class="row gy-2">
            <div class="portfolio-description">
                <h2 data-aos="fade-left">Era Kemerdekaan</h2>
                <div class="container grey-block p-3" data-aos="fade-in">
                    <p style="text-align: justify;">
                        Pada era modern, Desa Kismoyoso terus berkembang dengan berbagai infrastruktur yang mendukung pertanian, seperti jalan desa yang memadai, saluran irigasi yang baik, dan fasilitas pendukung lainnya. Selain itu, desa ini juga mulai mengembangkan sektor industri kecil, terutama industri tahu yang menjadi salah satu ikon desa.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection