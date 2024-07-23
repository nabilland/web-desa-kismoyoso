@extends('layouts.layout')

@section('breadcrumbs')
<h2>Struktur Organisasi Pemerintah Desa</h2>
<ol>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li>Struktur Pemerintahan</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container">
        <img src="{{ asset('assets/img/struktur.png') }}" width="50%" alt="">
    </div
</section>
@endsection