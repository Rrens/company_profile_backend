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
                    <h1 class="mb-2"
                        style="color: white; font-weight: normal; font-family: 'Inter Medium', sans-serif;">CONTACT</h1>
                    <div class="container-contact">
                        <form action="action_page.php" class="contact-form">

                            <input type="text" id="name" name="name" placeholder="Name" style="width: 90%;">

                            <input type="text" id="email" name="email" placeholder="Email" style="width: 90%;">

                            <input type="text" id="subject" name="subject" placeholder="Subject" style="width: 90%;">

                            <textarea id="message" name="message" placeholder="Message" style="width: 90%; height:200px; margin-bottom: 10px;"></textarea>

                        </form>
                      
                        <div class="alamat">
                            <div class="judul_alamat">1010 GROUP</div>
                            <div class="tempat_alamat">
                                <p>Jl Mendawai 1 no.78</p>
                                <p>Kebayoran Baru, South Jakarta 12130</p>
                                <p>Phone : 0852 1535 7357</p>
                                <p>Email : info@1010-group.com</p>
                            </div>
                        </div>
        
                    </div>
                    <div class="submit-contact"><input type="submit" class="transparent-button" value="Submit"></div>
                </div>
            </div>
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
