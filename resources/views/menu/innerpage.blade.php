@extends('layouts.layout')

@section('breadcrumbs')
<h2>Inner Page</h2>
<ol>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li>Inner Page</li>
</ol>
@endsection

@section('contents')
<section class="inner-page">
    <div class="container">
        <p>
            Example inner page template
        </p>
    </div>
</section>
@endsection