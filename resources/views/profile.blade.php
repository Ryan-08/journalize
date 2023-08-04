@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- profile -->
    <div class="profile">
        <h2 class="title">
            <i class="fas fa-user-alt"></i>
            profile
        </h2>
        <div class="input-wrapper">
            <input type="text" class="search" name="search" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <!-- list of profile -->
    <div class="container list-view">
        <div class="row">
            @forelse($profiles as $profile)
            <div class="col col-md-5" data-link="{{ route('viewProfile', ['id' => $profile->id]) }}">
                <img src="{{ asset('img/pp.jpg') }}" alt="profile-pic" width="120" height="120">
                <div class="profile-wrapper">
                    <p class="name">{{$profile->name}}</p>
                    <p class="prodi">Fakultas Teknik, Universitas Syiah Kuala</p>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
@endsection
