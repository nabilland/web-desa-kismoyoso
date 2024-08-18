@extends('layouts.layout')

@section('breadcrumbs')
<h2>Arsip</h2>
<ol>
    <li><a href="{{ route('index') }}">Beranda</a></li>
    <li>Arsip</li>
</ol>
@endsection

@section('contents')
<section class="inner-page" style="min-height: 50vh;" data-aos="fade-up">
    <div class="container">
        <h3 style="color:#8fc04e">Daftar Arsip</h3>
        <div class="document-list">
            <h5>Dokumen User Manual Reference (Buku Panduan Penggunaan Website)</h5>
            <p style="font-size: 11pt;">Silakan klik button di bawah ini untuk men-download dokumen!</p>
            <button type="button" class="green-button" onclick="toggleDocument('manual', this)">
                <i class="bx bx-chevron-right" style="padding-right:2px"></i>
            </button>
            <div id="manual" style="display: none;">
                <img src="{{ asset('assets/img/manual-cover.png') }}" alt="" style="width:22%;" class="mt-2"><br>
                <a target="_blank" href="https://drive.google.com/drive/folders/1HVR66tpQo0-G-cvcUU1KrhXxvXyX25y8?usp=sharing">
                    <button type="button" class="green-button mt-2">Download</button>
                </a>
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