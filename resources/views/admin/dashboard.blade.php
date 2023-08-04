@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- profile -->
    <div class="profile">
        <h2 class="title">
            <i class="fas fa-user-alt"></i>
            Dashboard
        </h2>
    </div>
    <!-- list of profile -->
    <div class="container list-view">
        <div class="row btn-login">
            <a href="{{ route('Crawl') }}">Crawl GS</a>
        </div>
        <div class="row btn-login">
            <a href="{{ route('saveCrawled') }}">Save To DB</a>
        </div>
    </div>
</section>
@endsection
