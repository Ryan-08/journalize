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
            <h3>{{ $data->title }}</h3>
            <h5>{{ $data->author }}</h5>
            <a href="">access to document</a>
            <a href="">access to link google drive</a>
        </div>
    </div>
    <!-- profile info -->
    <div class="doc-wrapper content-wrapper">
        <h3 class="title">Abstract</h3>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, consectetur velit
            excepturi a optio obcaecati et culpa esse in nostrum ducimus repudiandae, quam at sint numquam
            dignissimos quos pariatur magnam.
            Mollitia a officia nihil debitis, inventore velit quisquam iste tempore esse quod molestias
            consectetur ipsam ad unde ducimus? Dolore nemo sint corrupti corporis at vero laboriosam accusantium
            id expedita error.
            Dolorum mollitia perspiciatis ut amet, dolor veniam ad nulla expedita odit suscipit, minima
            repellendus sed? Animi qui sed maiores cupiditate! Praesentium ex, quas ratione ipsam magnam eaque
            maiores amet error.
            A officiis aspernatur quidem praesentium, unde explicabo eum laboriosam recusandae quo sed ut,
            obcaecati veritatis, at reiciendis! Reprehenderit eos placeat aliquam nostrum autem. Ducimus soluta
            reprehenderit eius rerum repudiandae alias!
        </p>
        <span class="desc">{{ $data->tahun }}, Cite:{{ $data->citation }}</span>
    </div>
</section>
@endsection
