@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- profile -->
    <div class="doc-header">
        <div class="button-back-wrapper">
            <a href="{{ redirect()->back()->getTargetUrl() }}"><i class="fas fa-angle-left"></i></a>
        </div>
        <div class="doc-info">
            <h3>Judul</h3>
            <h5>Nama</h5>
            <h5>jurusan</h5>
        </div>
    </div>
    <!-- profile info -->
    <div class="doc-wrapper content-wrapper">
        <div class="text-wrapper">
            <span class="text">Year</span>
            <span class="desc">2019</span>
        </div>
        <div class="text-wrapper">
            <span class="text">Organized by</span>
            <span class="desc">Kementrian Riset, Teknologi, dan Pendidikan Tinggi </span>
        </div>
        <div class="text-wrapper">
            <span class="text">Held at</span>
            <span class="desc">Di Gedung Academic Activity Center Prof. Dr. Dayan Dawood, M.A. Darussalam, Banda
                Aceh</span>
        </div>
</section>
@endsection
