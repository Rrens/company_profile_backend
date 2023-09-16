@extends('components.master')
@section('title', 'HOME')


@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container">
            <div class="row g-4">
                <div>
                    <h4 class="hero-status">BRING AN
                        ELEVATED CASUAL LIFESTYLE OF DINING EXPERIENCE BY REDEFINING THE BOUNDARIES OF EXPECTATIONS
                        AND EXCITING YOUR SENSE</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 hero-body">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h1 class="mb-2" style="color: white; font-weight: normal; font-family: 'Inter Medium', sans-serif;">
                    ESTABLISHMENTS</h1>
                <h6 class="mb-1 hero-status">We Optimize Quality With a Blend Of Traditional Cooking.</h6>
                <h6 class="mb-1 hero-status">Focus On Providing an Unforgettable Enjoyment Of Signature Taste.</h6>
            </div>
            <br>
        </div>
    </div>
    <div class="gallery-container">
        @include('components.image_container_1')
    </div>
@endsection
