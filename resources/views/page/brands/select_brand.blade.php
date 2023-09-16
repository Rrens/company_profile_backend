@extends('components.master')
@section('title', $data->name)

@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5> -->
                <h1 class="mb-2" style="color: white; font-family: 'Inter Medium', sans-serif;">{{ $data->name }}
                </h1>
                <h6 class="mb-1 hero-status">{!! $data->description !!}
                </h6>
                <button class="transparent-button">Learn More</button>
            </div>
        </div>
    </div>
    <!-- establish status End -->

    <div class="container-xxl py-5 hero-body">
        <div class="container my-5 py-5">
            <div class="highlight-main">
                @foreach ($galery as $item)
                    <div class="carousel-cell">
                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                            alt="">
                    </div>
                @endforeach
            </div>
            <div class="highlight-thumbs">
                @foreach ($galery as $item)
                    <div class="carousel-cell">
                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                            alt="">
                    </div>
                @endforeach
                <div class="carousel-scrollbar is-hidden">
                    <div class="carousel-scrollbar-inner"></div>
                </div>
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
    <style>
        .hero-header-{{ $data->name }} {
            /* {{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }} */
            background: url({{ empty($header->image) ? '-' : asset('storage/uploads/thumbnail/' . $header->image) }});
            /* background: url({{ empty($header->image) ? '-' : asset('storage/uploads/image' . $header->image) }}); */
            /* background-attachment: fixed; */
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            height: 70vh;
            align-items: center;
        }
    </style>
@endpush
