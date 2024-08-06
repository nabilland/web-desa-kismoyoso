@extends('layouts.layout')

@section('breadcrumbs')
<h2>Lilin Aromaterapi</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Lilin Aromaterapi</li>
</ol>
@endsection

@section('contents')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\lilin2.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\lilin3.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\lilin.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                    <li><strong>Nama Usaha</strong>: Padasan Craft - Lilin Aromaterapi</li>
                    <li><strong>Jenis Kegiatan Usaha</strong>: Pembuatan Lilin Aromaterapi</li>
                    <li><strong>Bidang Kegiatan Usaha</strong>: Kerajinan Tangan dan Daur Ulang</li>
                    <li><strong>Kategori Produk</strong>: Lilin Aromaterapi dari Minyak Jelantah</li>
                    <li><strong>Pemilik</strong>: [Nama Pemilik]</li>
                    <li><strong>Tahun Berdiri</strong>: [Tahun Berdiri]</li>
                        <div class="d-flex">
                            <li><strong>Lokasi</strong>:
                                <a target="_blank" href="https://www.google.com/maps/@-7.511346,110.7836679,3a,48.3y,83.15h,86.48t/data=!3m7!1e1!3m5!1saIswZwKmfEgwXHE0P6qVMQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DaIswZwKmfEgwXHE0P6qVMQ%26cb_client%3Dmaps_sv.share%26w%3D900%26h%3D600%26yaw%3D83.14834686969988%26pitch%3D3.5172561377603984%26thumbfov%3D90!7i16384!8i8192?coh=205410&entry=ttu">
                                    <button class="green-button">
                                        <i class="bx bx-map-pin" style="padding-right:2px"></i>
                                        Lihat Peta</button>
                                </a>
                            </li>
                        </div>
                        <div class="d-flex">
                            <li><strong>Kontak</strong>:
                                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281228844027">
                                    <button class="green-button">
                                        <i class="bx bx-message-rounded-dots" style="padding-right:2px"></i>
                                        Chat via WhatsApp</button>
                                </a>
                                <!-- <a href="tel:6285647904529">
                                    <button class="green-button">
                                        <i class="bx bx-phone" style="padding-right:2px"></i>
                                        Hubungi</button>
                                </a> -->
                            </li>
                        </div>
                        <!-- <li><strong>Prestasi</strong>: UMKM Unggulan</li> -->
                    </ul>
                    <!-- <h3 style="padding-top:20px;">Paguyuban UMKM</h3>
                    <div class="d-flex">
                        <button class="green-button">
                            <i class="bx bx-info-circle" style="padding-right:2px"></i>
                            Lihat Informasi Selengkapnya
                        </button>
                    </div> -->
                </div>
            </div>
            <div class="portfolio-description">
            <h2>Sekilas Tentang Padasan Craft</h2>
            <p style="text-align: justify;">
                Padasan Craft adalah sebuah usaha yang bergerak di bidang kerajinan tangan dan daur ulang, khususnya dalam pembuatan lilin aromaterapi dari minyak jelantah. Usaha ini didirikan oleh [Nama Pemilik] sejak [Tahun Berdiri] di Desa Kismoyoso. Lilin aromaterapi yang dihasilkan Padasan Craft terkenal dengan kualitasnya yang tinggi dan menggunakan bahan-bahan yang ramah lingkungan. Dengan memanfaatkan minyak jelantah, Padasan Craft tidak hanya menciptakan produk yang bermanfaat, tetapi juga turut serta dalam upaya pengurangan limbah rumah tangga.
            </p>
            <p style="text-align: justify;">
                Lilin aromaterapi dari Padasan Craft memiliki berbagai varian aroma yang menenangkan dan dapat digunakan untuk berbagai kebutuhan, seperti relaksasi, meditasi, dan meningkatkan kualitas udara dalam ruangan. Melalui proses produksi yang teliti dan penggunaan bahan-bahan alami, Padasan Craft memastikan setiap lilin yang diproduksi memiliki kualitas yang terbaik. Usaha ini telah mendapatkan perhatian positif dari masyarakat dan terus berkembang dengan pesanan yang datang dari berbagai daerah. Untuk informasi lebih lanjut atau pemesanan, Anda dapat menghubungi mereka melalui WhatsApp atau mengunjungi lokasi mereka yang tertera pada peta.
            </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection