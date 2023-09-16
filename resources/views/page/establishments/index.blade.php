@extends('components.master')
@section('title', 'ESTABLISHMENTS')


@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h1 class="mb-2" style="color: white; font-weight: normal; font-family: 'Inter Medium', sans-serif;">
                    ESTABLISHMENTS</h1>
                <h6 class="mb-1 hero-status">We optimize quality with a blend of traditional cooking.</h6>
                <h6 class="mb-1 hero-status">Focus on providing on unforgettable enjoyment of signature taste.</h6>

            </div>
        </div>
    </div>
    <!-- ABOUT status End -->

    <div class="gallery-container">
        @include('components.image_container_1')
    </div>
@endsection
