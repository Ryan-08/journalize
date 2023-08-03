@extends('layout.master')

@section('title', $context['page'])
@section('content')
@if(session('success') || session('error'))
<div class="alert {{ session('success') ? 'alert-success' : 'alert-danger'}}">
    {{ session('success') ? session('success') : session('error')}}
</div>
@endif
<section>
    <!-- login -->
    <form class="login-wrapper" action="{{ route('postLogin') }}" method="post">
        @csrf
        <h2 class="title mb-3">Login</h2>
        <div class="input-wrapper mb-2">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Password">
            <i class="fas fa-eye"></i>
            <!-- <i class="fas fa-eye-slash"></i> -->
        </div>

        <button type="submit" class="btn-submit mt-3">Login</button>
    </form>
</section>
@endsection
