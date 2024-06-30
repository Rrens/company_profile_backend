@extends('components.master')
@section('title', 'GALERIES')

@section('container')

    <div class="container-xxl py-5 hero-body">
        <div class="container my-5 py-5">
            <div class="gallery js-flickity custom-carousel-ukuran"
                data-flickity-options='{ "wrapAround": true, "pageDots": false }'>
                @foreach ($image as $item)
                    <div class="gallery-cell">
                        <a href="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                            data-fancybox="carousel">
                            <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                                alt="">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
@endpush
