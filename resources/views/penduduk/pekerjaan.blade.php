@extends('layouts.layout')

@section('breadcrumbs')
<h2>Pekerjaan Penduduk</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Pekerjaan Penduduk</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container mb-3">
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Pekerjaan Penduduk</h5>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <!-- Vertical Bar Chart -->
                    <div id="verticalBarChart" style="min-height: 500px;" class="echart"></div>
                    <div class="m-4">
                        <a href="#">
                            <button class="green-button" id="downloadBtn" style="position: absolute; bottom: 10px; right: 10px;">
                                <i class="bx bx-download" style="padding-right:2px"></i>
                                Download Gambar</button>
                        </a>
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
                                    data: ['Polisi', 'TNI', 'Guru', 'Karyawan Swasta', 'Wiraswasta', 'Pedagang', 'Petani/Pekebun', 'Buruh Harian Lepas', 'Mengurus Rumah Tangga', 'Belum/Tidak Bekerja', 'Pelajar/Mahasiswa']
                                },
                                series: [{
                                    name: 'Penduduk',
                                    type: 'bar',
                                    data: [3, 6, 76, 2879, 231, 58, 86, 1856, 508, 2814, 1987]
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
                                link.download = 'Diagram Pekerjaan Penduduk Desa Kismoyoso.png';
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
                Penduduk <b>Desa Kismoyoso</b> memiliki beragam pekerjaan yang mencerminkan berbagai sektor kehidupan. Sebagian besar penduduk bekerja sebagai Karyawan Swasta dengan jumlah 2.879 orang, diikuti oleh Belum/Tidak Bekerja sebanyak 2.814 orang. Profesi Pelajar/Mahasiswa juga cukup signifikan dengan jumlah 1.987 orang. Selain itu, terdapat 1.856 orang yang bekerja sebagai Buruh Harian Lepas dan 508 orang yang Mengurus Rumah Tangga.
                Profesi lainnya meliputi Petani/Pekebun sebanyak 86 orang, Wiraswasta dengan 231 orang, Pedagang dengan 58 orang, Guru dengan 76 orang, serta sejumlah kecil yang bekerja sebagai TNI (6 orang) dan Polisi (3 orang). Data ini menggambarkan keberagaman pekerjaan penduduk desa, yang mencakup sektor formal maupun informal, serta berbagai profesi yang mendukung dinamika ekonomi dan sosial di Desa Kismoyoso.
            </p>
        </div>
    </div>
</section>
@endsection