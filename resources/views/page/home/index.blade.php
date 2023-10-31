@extends('components.master')
@section('title', 'HOME')


@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container">
            <div class="row g-4">
                <div>
                    <h4 class="hero-status text-justify">Established at 2018, 1010Group aims to bring an elevated casual dining experience by redefining the dining culture and extending customers expectations.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 hero-body">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h1 class="mb-2" style="color: white; font-weight: normal; font-family: 'Josefin Sans', sans-serif;">
                    ESTABLISHMENTS</h1>
                <h6 class="mb-1 hero-status">Our focus on delivering high quality products and providing unforgettable experiences for our customers.
</h6>
                <!--<h6 class="mb-1 hero-status">Focus On Providing an Unforgettable Enjoyment Of Signature Taste.</h6>-->
            </div>
            <br>
        </div>
    </div>
    <div class="gallery-container">
        @include('components.image_container_1')
    </div>
@endsection
