@extends('layouts.layout')

@section('breadcrumbs')
<h2>Kandang Burung</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li><a href="{{ url('/#portfolio')}}">UMKM</a></li>
    <li>Kandang Burung</li>
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
                            <img src="{{ asset('assets\img\kandangburung.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\kandangburung1.jpg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\kandangburung2.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informasi UMKM</h3>
                    <ul>
                        <li><strong>Nama Usaha</strong>: Kandang Burung Pak Wawan</li>
                        <li><strong>Jenis Kegiatan Usaha</strong>: Pembuatan Kandang Burung</li>
                        <li><strong>Bidang Kegiatan Usaha</strong>: Kerajinan Tangan</li>
                        <li><strong>Kategori Produk</strong>: Kandang Burung </li>
                        <li><strong>Pemilik</strong>: Pak Wawan</li>
                        <li><strong>Tahun Berdiri</strong>: 2014</li>
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
            <h2>Sekilas Tentang Usaha Pembuatan Kandang Burung</h2>
            <p style="text-align: justify;">
                Pak Wawan, seorang pengusaha asal Desa Kismoyoso, telah mengembangkan usaha pembuatan kandang burung yang dimulainya sejak tahun 2014. Usaha ini berfokus pada pembuatan kandang burung sesuai pesanan dengan bahan utama kayu sonokeling dan bambu. Dengan kemampuan dan keterampilan yang diasah sejak kecil, Pak Wawan mampu memproduksi kandang burung yang unik dan berkualitas tinggi, yang dapat diselesaikan dalam waktu satu hingga dua hari per kandang. Kandang-kandang burung hasil karyanya telah tersebar hingga ke berbagai wilayah di Indonesia, termasuk Kalimantan dan Sumatera. 
            </p>
            <p style="text-align: justify;">
                Usahanya yang terus berkembang ini juga membantu mengangkat perekonomian masyarakat sekitar dengan melibatkan tenaga kerja lokal dalam proses produksinya. Pak Wawan menjual kandang-kandang burungnya dengan harga bervariasi sesuai ukuran dan model, mulai dari Rp250.000. Beliau menerima pesanan secara langsung dan mempromosikan produknya melalui jaringan pribadi serta media sosial. Meski menjalankan usaha secara mandiri, Pak Wawan kerap mendapat bantuan dari keluarganya untuk memenuhi pesanan yang terus meningkat.
            </p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->
@endsection