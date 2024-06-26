@extends('components.master')
@section('title', 'CONTACT')

@push('head')
    <style>
        .container-1 {
            position: relative;
        }

        .child {

            position: absolute;
            bottom: 50px;
            width: 100%;
        }

        @media (max-width: 991px) {
            .container-1 {
                position: relative;
            }

            .child {
                position: absolute;
                top: 20px;
                width: 100%;
            }

            .text-center {
                margin-top: 30px;
            }
        }
    </style>
@endpush

@section('container')
    <div class="container-xxl py-5 hero-body">
        <div id="contact" class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <div class="container-contact">
                    {{-- <div class="d-flex justify-content-between flex-column"> --}}
                    <div class="one">
                        <h1 class="mb-2 txt-contact">
                            CONTACT
                        </h1>
                        <form action="{{ route('admin.email.index') }}" class="contact-form" method="POST">
                            @csrf
                            <input type="text" id="name" name="name" placeholder="Name" style="width: 90%;">
                            <input type="text" id="email" name="email" placeholder="Email" style="width: 90%;">
                            <input type="text" id="subject" name="subject" placeholder="Subject" style="width: 90%;">
                            <textarea id="message" name="message" placeholder="Message" style="width: 90%; height:200px; margin-bottom: 10px;"></textarea>
                            <div class="submit-contact">
                                <button id="submit-button" type="submit" class="transparent-button">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="two mr-5">
                        <div class="alamat">
                            <div class="judul_alamat mt-5">1010 GROUP</div>
                            <div class="tempat_alamat">
                                <p>Jl MENDAWAI 1 NO.78</p>
                                <p>KEBAYORAN BARU, SOUTH JAKARTA 12130</p>
                                <p>PHONE : 0852 1535 7357</p>
                                <p>EMAIL : info@1010-group.com</p>
                                <div class="submit-contact">
                                    <a id="career-button"
                                        href="https://www.linkedin.com/in/1010indonesiagroup?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                        target="_blank" class="transparent-button">CAREER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>

    <!-- establish status End -->


    <div class="container-xxl py-5 hero-body">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s hero-status">
                <h2 class="hero-status" style="color: white; font-family: 'Josefin Sans', sans-serif;">RESERVE NOW
                </h2>
                @include('components.image_container_2')
            </div>
        </div>
    </div>
@endsection
