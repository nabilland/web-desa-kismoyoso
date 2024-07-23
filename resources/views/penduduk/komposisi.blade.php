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
        <h5 style="font-weight: bold;" class="mx-1 mb-3">Distribusi Penduduk Berdasarkan Jenis Kelamin</h6>
        <p class="mx-1">Total Penduduk: 9272</p>
            <div class="d-flex">
                <div class="col-lg-6 mx-1">
                    <div class="card">
                        <div class="card-body">

                            <!-- Pie Chart -->
                            <div id="pieChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#pieChart"), {
                                        series: [4751, 4521],
                                        chart: {
                                            height: 350,
                                            type: 'pie',
                                            toolbar: {
                                                show: true
                                            }
                                        },
                                        labels: ['Laki-Laki', 'Perempuan']
                                    }).render();
                                });
                            </script>
                            <!-- End Pie Chart -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection