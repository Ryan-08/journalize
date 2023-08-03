@extends('layout.master')

@section('title', $context['page'])
@section('content')
@if(session('success') || session('error'))
<div class="alert {{ session('success') ? 'alert-success' : 'alert-danger'}}">
    {{ session('success') ? session('success') : session('error')}}
</div>
@endif
<section class="event">
    <h2 class="title">Profile</h2>
    <div class="evet-profile-container">
        <div class="image-container">
            <img src="{{ asset('img/pp.jpg') }}" alt="profile" width="120" height="120">
            <button class="btn-prime">Ubah Foto</button>
            <a href="{{route('viewProfile')}}">View Profile</a>
        </div>
        <div class="form-container">
            <form action="" class="form">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="Nama">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="NIP">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="Category">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="Jurusan">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="Fakultas">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <textarea class="input-wrapper" name="" id="" cols="50" rows="10"
                            placeholder="Education"></textarea>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Link Sinta">
                        </div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <button class="btn-prime">Save</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
