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
    <div class="container mb-3">
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Distribusi Penduduk Berdasarkan Gender</h6>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div id="pieChart" style="min-height: 300px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#pieChart")).setOption({
                                    title: {
                                        // text: 'Gender Penduduk',
                                        // subtext: 'Fake Data',
                                        // left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'horizontal',
                                        left: 'right'
                                    },
                                    series: [{
                                        name: 'Jumlah',
                                        type: 'pie',
                                        radius: '80%',
                                        data: [{
                                                value: 4751,
                                                name: 'Laki-Laki'
                                            },
                                            {
                                                value: 4521,
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
                                });
                            });
                        </script>
                        <!-- End Pie Chart -->
                    </div>
                </div>
            </div>
            <div class="container grey-block p-3 mt-4">
                <p>Komposisi penduduk <b>Desa Kismoyoso</b> terbagi antara laki-laki dan perempuan dengan jumlah yang hampir seimbang. Dari total populasi, terdapat 4.751 laki-laki dan 4.521 perempuan. Perbedaan jumlah ini mencerminkan distribusi gender yang seimbang di desa, menunjukkan keberagaman dan keseimbangan dalam struktur demografi masyarakat setempat.</p>
            </div>
    </div>
    </div>
</section>
@endsection