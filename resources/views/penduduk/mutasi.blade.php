@extends('layouts.layout')

@section('breadcrumbs')
<h2>Mutasi Penduduk</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Mutasi Penduduk</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <!-- MUTASI -->
    <div class="container mb-3 mt-5">
        <h5 style="font-weight: bold;" class="mx-1 mb-3" data-aos="fade-in">Mutasi Penduduk</h6>
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
                                                value: 86,
                                                name: 'Datang'
                                            },
                                            {
                                                value: 80,
                                                name: 'Pindah'
                                            },
                                            {
                                                value: 120,
                                                name: 'Lahir'
                                            },
                                            {
                                                value: 76,
                                                name: 'Meninggal'
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
                                    link.download = 'Diagram Mutasi Penduduk Desa Kismoyoso.png';
                                    link.click();
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4" data-aos="fade-in">
                <p style="text-align:justify;">Mutasi penduduk <b>Desa Kismoyoso</b> dapat dilihat dari adanya proses perubahan sebagaimana pada grafik diatas, dan kondisi tersebut dikarenakan :</p>
                <ul>
                        <li><b>Datang,</b> berasal dari daearah lain.</li>
                        <li>Karena <b> Keluarga</b></li>
                        <li><b>Pindah</b> tempat tinggal ke daerah lain.</li>
                        <li><b> Meninggal dunia</b> disebabkan karena :
                        <ul>
                            <li><b>Usia</b></li>
                            <li><b> Penyakit</b></li>
                            <li><b>Kecelakaan</b> </li>
                        </ul>
                        </li>
                    </ul>
            </div>
    </div>
</section>
@endsection