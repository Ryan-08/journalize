@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- project -->
    <div class="project">
        <h2 class="title">
            <i class="fas fa-puzzle-piece"></i>
            project
        </h2>
        <div class="input-wrapper">
            <input type="text" class="search" name="search" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <!-- list of project -->
    <div class="container list-view">
        <div class="row">
            <div class="col-8 doc" data-link="{{ route('viewProject') }}">
                <p class="title">Speaking problem faced by the English department students of Syiah Kuala
                    University</p>
                <p class="name">H. Heriansyah, 115</p>
                <p class="lokasi">Lab Mikrobiologi, Syiah Kuala</p>
                <p class="tahun">2020</p>
                <p class="bidang">Bidang Kedokteran</p>
            </div>
        </div>
    </div>
</section>

@endsection
