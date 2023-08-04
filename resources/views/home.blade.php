@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- home -->
    <div class="home">
        <h2 class="title">Welcome to Syiah Kuala University</h2>
        <div class="input-wrapper">
            <input type="text" class="search" name="search" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <!-- menu -->
    <div class="menu-wraper">
        <ul class="menu">
            <li class="list-menu">
                <a href="{{ route('profile') }}">
                    <i class="fas fa-user-alt"></i>
                    profile
                </a>
            </li>
            <li class="list-menu">
                <a href="{{ route('research') }}">
                    <i class="fas fa-book-open"></i>
                    research
                </a>
            </li>
            <li class="list-menu">
                <a href="{{ route('project') }}">
                    <i class="fas fa-puzzle-piece"></i>
                    project
                </a>
            </li>
            <li class="list-menu">
                <a href="{{ route('activities') }}">
                    <i class="fas fa-clock"></i>
                    activities
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
