@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section>
    <!-- research -->
    <div class="research">
        <h2 class="title">
            <i class="fas fa-book-open"></i>
            research
        </h2>
        <div class="input-wrapper">
            <input type="text" class="search" name="search" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <!-- list of research -->
    <div class="container list-view">
        <div class="row">
            @forelse($data as $riset)
            <div class="col-8 doc" data-link="{{ route('viewResearch', $riset->id) }}">
                <p class="title">{{ $riset->title }}</p>
                <p class="name">{{ $riset->author }}</p>
                <br>
                <p class="research-link" data-link="{{ $riset->link }}">Visit Link google scholar</p>
            </div>
            @empty
            @endforelse
        </div>
        Halaman : {{ $data->currentPage() }} <br />
        Data Per Halaman : {{ $data->perPage() }} <br />
        Jumlah Data : {{ $data->total() }} <br />
        <br>
        {{$data->links('vendor.pagination.simple-bootstrap-5')}}
    </div>

</section>

@endsection
