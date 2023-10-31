@extends('components.master')
@section('title', $data->name)

@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5> -->
                <h1 class="mb-2" style="color: white; font-family: 'Josefin Sans', sans-serif;">{{ $data->name }}
                </h1>
                <h6 class="mb-1 hero-status">{!! $data->description !!}
                </h6>
                <a href="{{ $data->instagram }}" target="_blank" class="transparent-button href">Learn More</a>
            </div>
        </div>
    </div>
    <!-- establish status End -->

    <div class="container-xxl py-5 hero-body">
        <div class="container my-5 py-5">
            <div class="gallery js-flickity custom-carousel-ukuran" data-flickity-options='{ "wrapAround": true, "pageDots": false }'>
                @foreach ($galery as $item)
                <div class="gallery-cell">
                  <a href="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}" data-fancybox="carousel">
                    <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}" alt="">
                  </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h2 class="hero-status" style="color: white; font-family: 'Josefin Sans', sans-serif;">RESERVE NOW</h2>
                @include('components.image_container_2')
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Tambahkan Fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
      $(document).ready(function() {    
        // Inisialisasi Fancybox pada gambar di dalam carousel
        $carousel.find('.carousel-cell img').fancybox({
          // Opsi Fancybox
        });
      });
    </script>
@endpush

@push('head')
    <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
       .hero-header-{{ $data->id }} {
            background-image: url({{ empty($header->image) ? '-' : asset('storage/uploads/thumbnail/' . $header->image) }});
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            height: 70vh;
            align-items: center;
        }

        .href {
            background-color: transparent;
            border: 1px solid white;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            padding: 10px 20px;
            transition: background-color 0.2s;
            margin: 0 450px;
            display: block;
        }
    </style>
@endpush
