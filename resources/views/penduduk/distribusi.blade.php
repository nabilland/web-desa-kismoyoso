@extends('layouts.layout')

@section('breadcrumbs')
<h2>Distribusi Penduduk</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Distribusi Penduduk</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <!-- POPULASI PER WILAYAH -->
    <div class="container mb-3 mt-5">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Distribusi Penduduk</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart2" style="min-height: 300px;" class="echart"></div>
                        <div class="m-4">
                            <a href="#">
                                <button class="green-button" id="downloadBtn2" style="position: absolute; bottom: 10px; right: 10px;">
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
                                                value: 1600,
                                                name: 'Dusun 1'
                                            },
                                            {
                                                value: 2239,
                                                name: 'Dusun 2'
                                            },
                                            {
                                                value: 3903,
                                                name: 'Dusun 3'
                                            },
                                            {
                                                value: 2398,
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

                                document.querySelector("#downloadBtn2").addEventListener("click", () => {
                                    var imgURL = chart.getDataURL({
                                        type: 'png',
                                        pixelRatio: 2,
                                        backgroundColor: '#fff'
                                    });
                                    var link = document.createElement('a');
                                    link.href = imgURL;
                                    link.download = 'Diagram Distribusi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Distribusi penduduk <b>Desa Kismoyoso</b> menunjukkan variasi jumlah penduduk di setiap dusun. Dari total populasi, Dusun 1 memiliki 1.600 penduduk, Dusun 2 berjumlah 2.239 penduduk, Dusun 3 merupakan dusun dengan populasi terbesar sebanyak 3.903 penduduk, dan Dusun 4 memiliki 2.398 penduduk. Perbedaan jumlah ini mencerminkan distribusi penduduk yang bervariasi di setiap wilayah, menunjukkan karakteristik demografi yang unik di masing-masing dusun dalam desa tersebut.</p>
            </div>
    </div>
</section>
@endsection