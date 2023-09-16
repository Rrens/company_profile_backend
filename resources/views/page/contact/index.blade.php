@extends('components.master')
@section('title', 'CONTACT')

@section('container')
    <div class="container-xxl py-5 hero-body">
        <div id="contact" class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h1 class="mb-2" style="color: white; font-weight: normal; font-family: 'Inter Medium', sans-serif;">CONTACT
                </h1>

                <form action="{{ route('admin.email.index') }}" method="POST">
                    @csrf
                    <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder="Name" style="width: 90%;">

                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email" style="width: 90%;">

                    <label for="subject"></label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" style="width: 90%;">

                    <label for="message"></label>
                    <textarea id="message" name="message" placeholder="Message" style="width: 90%; height:200px;"></textarea>

                    <input type="submit" class="transparent-button" value="Submit">

                </form>
            </div>
        </div>
    </div>

    <!-- establish status End -->


    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h2 class="hero-status" style="color: white;">RESERVE NOW</h2>
                @include('components.image_container_2')
            </div>
        </div>
    </div>
@endsection
