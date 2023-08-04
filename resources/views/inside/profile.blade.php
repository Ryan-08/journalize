@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- profile -->
    <div class="profile-header">
        <div class="button-back-wrapper">
            <a href="{{ redirect()->back()->getTargetUrl() }}"><i class="fas fa-angle-left"></i></a>
        </div>
        <div class="image-wrapper">
            <img src="{{ asset('img/pp.jpg') }}" alt="profile pic" width="150" height="150">
            <a href="#">View Sinta Profile</a>
        </div>
        <div class="profile-info">
            <h3>
                Nama
            </h3>
            <h5>jurusan</h5>
        </div>
        <!-- <div class="wrapper">
            <div class="input-wrapper">
                <input type="text" class="search" name="search" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div> -->
    </div>
    <!-- profile info -->
    <div class="content-wrapper">
        <!-- personal profile -->
        <h2 class="title">
            <i class="fas fa-user-alt"></i>
            Personal Profile
        </h2>
        <div class="container personal-profile">
            <div class="info-wrapper">
                <span class="info">
                    nama
                </span>
                <span class="info">nomor</span>
                <span class="info">chemical process</span>
                <span class="info">jurusan </span>
                <span class="info">fakultas</span>
                <span class="info">email</span>
            </div>
            <span class="list-title">Education :</span>
            <ul class="list-edu">
                <li class="edu">edu1</li>
                <li class="edu">edu2</li>
                <li class="edu">edu3</li>
            </ul>
        </div>
        <!-- research -->
        <h2 class="title">
            <i class="fas fa-book-open"></i>
            research
        </h2>
        <!-- list of research -->
        <div class="container personal-profile">
            <div class="row">
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>
                    <p class="name">H. Heriansyah, 115</p>
                    <p class="research-link">https://jurnal.instiki.ac.id/</p>
                </div>
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>
                    <p class="name">H. Heriansyah, 115</p>
                    <p class="research-link">https://jurnal.instiki.ac.id/</p>
                </div>
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>
                    <p class="name">H. Heriansyah, 115</p>
                    <p class="research-link">https://jurnal.instiki.ac.id/</p>
                </div>
            </div>
        </div>
        <!-- projects -->
        <h2 class="title">
            <i class="fas fa-puzzle-piece"></i>
            project
        </h2>
        <!-- list of projects -->
        <div class="container personal-profile">
            <div class="row">
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p class="name">H. Heriansyah, 115</p>
                    <p class="lokasi">Lab Mikrobiologi, Syiah Kuala</p>
                    <p class="tahun">2020</p>
                    <p class="bidang">Bidang Kedokteran</p>
                </div>
            </div>
        </div>
        <!-- activities -->
        <h2 class="title">
            <i class="fas fa-clock"></i>
            activities
        </h2>
        <!-- list of activities -->
        <div class="container personal-profile">
            <div class="row">
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p class="name">Narasumber</p>
                    <p class="tahun">2020</p>
                </div>
                <div class="col-8 doc">
                    <p class="title">Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p class="name">Narasumber</p>
                    <p class="tahun">2020</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
