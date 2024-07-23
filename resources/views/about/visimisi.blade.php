@extends('layouts.layout')

@section('breadcrumbs')
<h2>Visi & Misi</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Visi & Misi</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container">
        <h5 style="font-weight: bold">Visi</h5>
        <p>Terwujudnya sistem pemerintahan yang efektif sehingga mampu meningkatkan pelayanan dan kesejahteraan masyarakat.</p>
    </div>
    <div class="container mt-4">
        <h5 style="font-weight: bold">Misi</h5>
        <ol type="a">
            <li>Penyelenggaraan pemerintahan yang efektif dan efisien.</li>
            <li>Pengembangan kemampuan administrasi pemerintah dan pembangunan.</li>
            <li>Peningkatan pelayanan, pemberdayaan masyarakat dan kesejahteraan masyarakat.</li>
        </ol>
    </div>
</section>
@endsection