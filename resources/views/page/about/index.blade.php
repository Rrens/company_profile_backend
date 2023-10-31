@extends('components.master')
@section('title', 'ABOUT')


@section('container')
    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h1 class="mb-1" style="color: white;  font-weight: normal; font-family: 'Josefin Sans', sans-serif;">ABOUT
                    US
                </h1>
                <br>
                <h6 class="mb-1 hero-status">Established at 2018, 1010Group aims to bring an elevated casual dining experience by redefining the dining culture and extending customers expectations.</h6>
                <br>
                <!--<h6 class="mb-1 hero-status mb-5">WE HOPE, OUR PRESENCE CAN SATISFY EVERY CUSTOMER WITH THE BEST QUALITY-->
                <!--    WHILE PROVIDING SERVICES THAT CREATE MEMORABLE EXPERIENCE.</h6>-->


                <h2 class="hero-status mt-5" style="color: white; font-family: 'ReemKufi-Regular', sans-serif;">RESERVE NOW</h2>
                @include('components.image_container_2')
            </div>
        </div>
    </div>
@endsection
