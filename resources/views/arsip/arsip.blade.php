@extends('layouts.layout')

@section('breadcrumbs')
<h2>Arsip</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Arsip</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container">
        <h3>Daftar Dokumen</h3>
        <div class="document-list mt-3">
            <h6>Dokumen User Manual Reference (Buku Panduan Penggunaan Website)</h6>
            <button type="button" class="green-button" onclick="toggleDocument('manual', this)">
                <i class="bx bx-chevron-right" style="padding-right:2px"></i>
            </button>
            <div id="manual" style="display: none;">
                <img src="{{ asset('assets/img/manual-cover.png') }}" alt="" style="width:22%;" class="mt-2"><br>
                <button type="button" src="" class="green-button mt-2">Download</button>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleDocument(id, button) {
        var element = document.getElementById(id);
        if (element.style.display === "none") {
            element.style.display = "block";
            button.innerHTML = '<i class="bx bx-chevron-down" style="padding-right:2px"></i>';
        } else {
            element.style.display = "none";
            button.innerHTML = '<i class="bx bx-chevron-right" style="padding-right:2px"></i>';
        }
    }
</script>
@endsection