@extends('layouts.layout')

@section('breadcrumbs')
<h2>Komposisi Penduduk</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Komposisi Penduduk</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <!-- POPULASI BERDASARKAN GENDER -->
    <div class="container mb-3">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Distribusi Penduduk Berdasarkan Gender</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart" style="min-height: 300px;" class="echart"></div>
                        <div class="m-4">
                            <a href="#">
                                <button class="green-button" id="downloadBtn" style="position: absolute; bottom: 10px; right: 10px;">
                                    <i class="bx bx-download" style="padding-right:2px"></i>
                                    Download Gambar</button>
                            </a>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var chart = echarts.init(document.querySelector("#pieChart"));
                                var option = {
                                    title: {
                                        // text: 'Gender Penduduk',
                                        // subtext: 'Fake Data',
                                        // left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'right'
                                    },
                                    series: [{
                                        name: 'Penduduk',
                                        type: 'pie',
                                        radius: '80%',
                                        data: [{
                                                value: 5319,
                                                name: 'Laki-Laki'
                                            },
                                            {
                                                value: 4906,
                                                name: 'Perempuan'
                                            },
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                };

                                chart.setOption(option);

                                document.querySelector("#downloadBtn").addEventListener("click", () => {
                                    var imgURL = chart.getDataURL({
                                        type: 'png',
                                        pixelRatio: 2,
                                        backgroundColor: '#fff'
                                    });
                                    var link = document.createElement('a');
                                    link.href = imgURL;
                                    link.download = 'Diagram Komposisi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Komposisi penduduk <b>Desa Kismoyoso</b> terbagi antara laki-laki dan perempuan dengan jumlah yang hampir seimbang. Dari total populasi, terdapat 5.319 laki-laki dan 4.906 perempuan. Perbedaan jumlah ini mencerminkan distribusi gender yang seimbang di desa, menunjukkan keberagaman dan keseimbangan dalam struktur demografi masyarakat setempat.</p>
            </div>
    </div>

    <!-- POPULASI PER WILAYAH -->
    <div class="container mb-3 mt-5">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Distribusi Penduduk Berdasarkan Wilayah</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart2" style="min-height: 300px;" class="echart"></div>
                        <div class="m-4">
                            <a href="#">
                                <button class="green-button" id="downloadBtn" style="position: absolute; bottom: 10px; right: 10px;">
                                    <i class="bx bx-download" style="padding-right:2px"></i>
                                    Download Gambar</button>
                            </a>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var chart = echarts.init(document.querySelector("#pieChart2"));
                                var option = {
                                    title: {
                                        // text: 'Gender Penduduk',
                                        // subtext: 'Fake Data',
                                        // left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'right'
                                    },
                                    series: [{
                                        name: 'Penduduk',
                                        type: 'pie',
                                        radius: '80%',
                                        data: [{
                                                value: 2384,
                                                name: 'Dusun 1'
                                            },
                                            {
                                                value: 1514,
                                                name: 'Dusun 2'
                                            },
                                            {
                                                value: 3911,
                                                name: 'Dusun 3'
                                            },
                                            {
                                                value: 2416,
                                                name: 'Dusun 4'
                                            },
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                };

                                chart.setOption(option);

                                document.querySelector("#downloadBtn").addEventListener("click", () => {
                                    var imgURL = chart.getDataURL({
                                        type: 'png',
                                        pixelRatio: 2,
                                        backgroundColor: '#fff'
                                    });
                                    var link = document.createElement('a');
                                    link.href = imgURL;
                                    link.download = 'Diagram Komposisi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Distribusi penduduk <b>Desa Kismoyoso</b> menunjukkan variasi jumlah penduduk di setiap dusun. Dari total populasi, Dusun 1 memiliki 2.384 penduduk, Dusun 2 berjumlah 1.514 penduduk, Dusun 3 merupakan dusun dengan populasi terbesar sebanyak 3.911 penduduk, dan Dusun 4 memiliki 2.416 penduduk. Perbedaan jumlah ini mencerminkan distribusi penduduk yang bervariasi di setiap wilayah, menunjukkan karakteristik demografi yang unik di masing-masing dusun dalam desa tersebut.</p>
            </div>
    </div>

    <!-- POPULASI BERDASARKAN STATUS PERKAWINAN -->
    <div class="container mb-3 mt-5">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Distribusi Penduduk Berdasarkan Status Perkawinan</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart3" style="min-height: 300px;" class="echart"></div>
                        <div class="m-4">
                            <a href="#">
                                <button class="green-button" id="downloadBtn" style="position: absolute; bottom: 10px; right: 10px;">
                                    <i class="bx bx-download" style="padding-right:2px"></i>
                                    Download Gambar</button>
                            </a>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var chart = echarts.init(document.querySelector("#pieChart3"));
                                var option = {
                                    title: {
                                        // text: 'Gender Penduduk',
                                        // subtext: 'Fake Data',
                                        // left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'right'
                                    },
                                    series: [{
                                        name: 'Penduduk',
                                        type: 'pie',
                                        radius: '80%',
                                        data: [{
                                                value: 4587,
                                                name: 'Belum Kawin'
                                            },
                                            {
                                                value: 5003,
                                                name: 'Kawin'
                                            },
                                            {
                                                value: 169,
                                                name: 'Cerai Hidup'
                                            },
                                            {
                                                value: 466,
                                                name: 'Cerai Mati'
                                            },
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                };

                                chart.setOption(option);

                                document.querySelector("#downloadBtn").addEventListener("click", () => {
                                    var imgURL = chart.getDataURL({
                                        type: 'png',
                                        pixelRatio: 2,
                                        backgroundColor: '#fff'
                                    });
                                    var link = document.createElement('a');
                                    link.href = imgURL;
                                    link.download = 'Diagram Komposisi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Komposisi penduduk <b>Desa Kismoyoso</b> berdasarkan agama menunjukkan mayoritas penduduk beragama Islam dengan jumlah 10.091 orang. Selain itu, terdapat 119 orang yang beragama Kristen dan 15 orang beragama Katolik. Data ini mencerminkan keragaman keyakinan agama yang ada di desa, dengan dominasi agama Islam sebagai mayoritas.</p>
            </div>
    </div>

    <!-- POPULASI BERDASARKAN AGAMA -->
    <div class="container mb-3 mt-5">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Distribusi Penduduk Berdasarkan Agama</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart4" style="min-height: 300px;" class="echart"></div>
                        <div class="m-4">
                            <a href="#">
                                <button class="green-button" id="downloadBtn" style="position: absolute; bottom: 10px; right: 10px;">
                                    <i class="bx bx-download" style="padding-right:2px"></i>
                                    Download Gambar</button>
                            </a>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var chart = echarts.init(document.querySelector("#pieChart4"));
                                var option = {
                                    title: {
                                        // text: 'Gender Penduduk',
                                        // subtext: 'Fake Data',
                                        // left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'right'
                                    },
                                    series: [{
                                        name: 'Penduduk',
                                        type: 'pie',
                                        radius: '80%',
                                        data: [{
                                                value: 10091,
                                                name: 'Islam'
                                            },
                                            {
                                                value: 119,
                                                name: 'Kristen'
                                            },
                                            {
                                                value: 15,
                                                name: 'Katolik'
                                            }
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                };

                                chart.setOption(option);

                                document.querySelector("#downloadBtn").addEventListener("click", () => {
                                    var imgURL = chart.getDataURL({
                                        type: 'png',
                                        pixelRatio: 2,
                                        backgroundColor: '#fff'
                                    });
                                    var link = document.createElement('a');
                                    link.href = imgURL;
                                    link.download = 'Diagram Komposisi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Komposisi penduduk <b>Desa Kismoyoso</b> memiliki status perkawinan yang beragam. Sebanyak 4.587 orang berstatus Belum Kawin, sementara 5.003 orang berstatus Kawin. Selain itu, terdapat 169 orang yang berstatus Cerai Hidup dan 466 orang berstatus Cerai Mati. Data ini menggambarkan variasi dalam status perkawinan penduduk, yang mencerminkan dinamika kehidupan sosial di desa tersebut.</p>
            </div>
    </div>
</section>
@endsection