@extends('layouts.layout')

@section('breadcrumbs')
<h2>Pendidikan Penduduk</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Pendidikan Penduduk</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container mb-3">
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Distribusi Pendidikan Penduduk</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Vertical Bar Chart -->
                        <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>
                        <div class="m-4">
                            <button id="downloadBtn" class="green-button" style="position: absolute; bottom: 10px; right: 10px;">Download Gambar</button>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var chart = echarts.init(document.querySelector("#verticalBarChart"));
                                var option = {
                                    tooltip: {
                                        trigger: 'axis',
                                        axisPointer: {
                                            type: 'shadow'
                                        }
                                    },
                                    legend: {
                                        left: 'right',
                                    },
                                    grid: {
                                        left: '3%',
                                        right: '4%',
                                        bottom: '3%',
                                        containLabel: true
                                    },
                                    xAxis: {
                                        type: 'value',
                                        boundaryGap: [0, 0.01]
                                    },
                                    yAxis: {
                                        type: 'category',
                                        data: ['Tamat SD/Sederajat', 'SLTP', 'SLTA', 'Diploma', 'Sarjana']
                                    },
                                    series: [{
                                        name: 'Penduduk',
                                        type: 'bar',
                                        data: [2577, 2203, 1927, 160, 253]
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
                                    link.download = 'Diagram Pendidikan Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Vertical Bar Chart -->

                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4">
                <p style="text-align:justify;">
                    Masyarakat <b>Desa Kismoyoso</b> memiliki berbagai tingkat pendidikan yang mencerminkan keragaman latar belakang dan aspirasi. Data di atas menunjukkan distribusi pendidikan, mencakup tingkat pendidikan Sarjana, Diploma, SLTA, SLTP, dan Tamat SD/Sederajat.
                    Dari data yang tersedia, dapat disimpulkan bahwa 2.577 orang telah menempuh pendidikan SD, 2.203 orang mencapai tingkat SLTP, 1.927 orang menempuh tingkat SLTA, 160 orang menempuh tingkat Diploma, dan 253 orang menempuh tingkat Sarjana.
                </p>
            </div>
    </div>
</section>
@endsection