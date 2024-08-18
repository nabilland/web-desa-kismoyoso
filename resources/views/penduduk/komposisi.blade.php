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
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Komposisi Penduduk</h6>
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
                                                value: 5256,
                                                name: 'Laki-Laki'
                                            },
                                            {
                                                value: 4884,
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
                <p style="text-align:justify;">Komposisi penduduk <b>Desa Kismoyoso</b> terbagi antara laki-laki dan perempuan dengan jumlah yang hampir seimbang. Dari total populasi, terdapat 5.256 laki-laki dan 4.884 perempuan. Perbedaan jumlah ini mencerminkan distribusi gender yang seimbang di desa, menunjukkan keberagaman dan keseimbangan dalam struktur demografi masyarakat setempat.</p>
            </div>
    </div>
</section>
@endsection