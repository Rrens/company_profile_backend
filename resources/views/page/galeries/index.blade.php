@extends('components.master')
@section('title', 'GALERIES')

@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container my-5 py-5">
            <div class="highlight-main">
                @foreach ($image as $item)
                    <div class="carousel-cell">
                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                            alt="">
                    </div>
                @endforeach
            </div>
            <div class="highlight-thumbs">
                @foreach ($image as $item)
                    <div class="carousel-cell">
                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                            alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h2 class="hero-status" style="color: white;">RESERVE NOW</h2>
                @include('components.image_container_2')
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endpush

@push('head')
    <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
