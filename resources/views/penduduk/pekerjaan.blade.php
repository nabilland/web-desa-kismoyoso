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
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Pekerjaan Penduduk Berdasarkan Gender</h5>
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
                                    data: ['Swasta', 'Polisi', 'TNI', 'PNS', 'Buruh', 'Pedagang', 'Petani']
                                },
                                series: [{
                                        name: 'Laki-Laki',
                                        type: 'bar',
                                        data: [431, 3, 6, 18, 310, 15, 502]
                                    },
                                    {
                                        name: 'Perempuan',
                                        type: 'bar',
                                        data: [302, 0, 0, 24, 450, 35, 304]
                                    }
                                ]
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
            <p>
                Masyarakat <b>Desa Kismoyoso</b> memiliki berbagai jenis mata pencaharian yang mencerminkan keragaman profesi dan peran. Data di atas memperlihatkan distribusi jenis pekerjaan berdasarkan gender, mencakup berbagai profesi seperti Petani, Pedagang, Buruh, PNS, TNI, Polisi, dan Swasta.
                Dari data yang ada, dapat disimpulkan bahwa sebagian besar laki-laki terlibat dalam sektor pertanian dan swasta. Sementara itu, perempuan cenderung bekerja di sektor buruh dan pertanian. Keberagaman ini mencerminkan dinamika ekonomi desa yang adaptif terhadap kebutuhan dan peluang yang ada.
            </p>
        </div>
    </div>
</section>
@endsection