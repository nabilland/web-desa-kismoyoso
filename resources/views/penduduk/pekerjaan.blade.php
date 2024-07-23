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
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Pekerjaan Penduduk Berdasarkan Jenis Kelamin</h6>
        <div class="d-flex justify-content-around">
            <div class="col-lg-6 mx-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laki-Laki</h5>

                        <!-- Bar Chart -->
                        <div id="barChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#barChart"), {
                                    series: [{
                                        data: [502, 15, 310, 18, 6, 3, 431]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 4,
                                            horizontal: true,
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    xaxis: {
                                        categories: ['Tani', 'Pedagang', 'Buruh', 'PNS', 'TNI', 'POLRI', 'Swasta'],
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Bar Chart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mx-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Perempuan</h5>

                        <!-- Bar Chart -->
                        <div id="barChart2"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#barChart2"), {
                                    series: [{
                                        data: [304, 35, 450, 24, 0, 0, 302]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350,
                                    },
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 4,
                                            horizontal: true,
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    xaxis: {
                                        categories: ['Tani', 'Pedagang', 'Buruh', 'PNS', 'TNI', 'POLRI', 'Swasta'],
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Bar Chart -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection