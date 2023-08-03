@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- Daftar -->
    <form class="login-wrapper mb-5" action="{{ route('postRegister') }}" method="post">
        @csrf
        <h2 class="title mb-3">Daftar</h2>
        <div class="input-wrapper mb-2">
            <input type="text" name="name" placeholder="Nama">
        </div>
        <div class="input-wrapper mb-2">
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="input-wrapper mb-2">
            <input type="password" name="password" placeholder="Password">
            <i class="fas fa-eye"></i>
            <!-- <i class="fas fa-eye-slash"></i> -->
        </div>
        <div class="input-wrapper">
            <input type="password" name="passwordConfirmation" placeholder="Konfirmasi Password">
            <i class="fas fa-eye"></i>
            <!-- <i class="fas fa-eye-slash"></i> -->
        </div>

        <button type="submit" class="btn-submit mt-3">Daftar</button>
    </form>
</section>
@endsection
