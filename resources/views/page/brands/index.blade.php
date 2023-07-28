@extends('components.master')
@section('title', 'BRAND')

@section('container')
    <div class="sections_wrapper ">
        <section class="title_text header_padding bottom_border">
            <div class="_wrapper title_style">ALL THE BRANDS WE HAVE</div>
        </section>
        <section class="brand_sliders collapse snap nbt checkposition dropdown__mobileonly no_arrow">
            <div class="bs_collapse_head dropdown__trigger">OUTLETS <img
                    src="{{ asset('assets/img/icon/apple-touch-icon.png') }}">
            </div>
            <div class="brand_slider_wrapper dragscroll dropdown__wrapper">
                <span class="each_brand_slider">BEER GARDEN</span>
                <span class="each_brand_slider">FŪJIN</span>
                <span class="each_brand_slider">PIPPO ITALIAN</span>
                <span class="each_brand_slider">BEER HALL</span>
                <span class="each_brand_slider">DUCK DOWN BAR</span>
                <span class="each_brand_slider">BLACK POND TAVERN</span>
                <span class="each_brand_slider">ACTA BRASSERIE</span>
                <span class="each_brand_slider">CANTINERO</span>
                <span class="each_brand_slider">SILK BISTRO</span>
            </div>
            <div class="__nav prev"><svg class="nav_arrow" width="14px" height="9px" viewBox="0 0 14 9" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2" fill="transparent">
                        <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                    </g>
                </svg></div>
            <div class="__nav next"><svg class="nav_arrow" width="14px" height="9px" viewBox="0 0 14 9" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2" fill="transparent">
                        <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                    </g>
                </svg></div>
        </section>
        <section class="brand_slider_placeholder"></section>
        <div class="___wrapper">
            <section class="brand_container_title getposition bottom_border">
                <a href="{{ route('brand.select') }}" class="brand_title">BEER GARDEN</a>
            </section>
            <section class="brand_container no_border_top">

                <div class="brand_multiple_selector">
                    <div class="_wrapper dragscroll">
                        <span class="active">SCBD</span>
                        <span>RADIO DALAM</span>

                    </div>
                </div>

                <div class="_wrapper brands active">
                    <a href="{{ route('brand.select') }}" class="link_img">
                        <img class="img_brands progressive__load"
                            src="https://biko-group.com/files/2019/03/20/5c91f890cfdd391425542180.jpeg">
                    </a>
                    <div class="brand_text active">
                        <div class="brand_text_left default__style">
                            <strong>Beer Garden SCBD</strong><br />Lot 8 SCBD<br />Jl. Jend. Sudirman Kav
                            52-53<br />West Jakarta<br />12190
                        </div>
                        <div class="brand_text_right default__style">
                            Mon - Sun: 4 PM - 2 AM<br /><br /><a
                                href="https://www.instagram.com/beergardenjkt">@beergardenjkt</a>
                        </div>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6281380085856" class="btn_rsvp">RSVP</a>
                </div>
                <div class="_wrapper brands active">
                    <a href="/beer-garden.html" class="link_img">
                        <img class="img_brands progressive__load"
                            src="https://biko-group.com/files/2021/10/25/61766dd448d7566033187807.jpeg">
                    </a>
                    <div class="brand_text active">
                        <div class="brand_text_left default__style">
                            <strong>Beer Garden Radio Dalam</strong><br />Jl. Radio Dalam Raya No. 45<br />West
                            Jakarta<br />12140
                        </div>
                        <div class="brand_text_right default__style">
                            Mon - Sun: 4 PM - 2 AM<br /><br /><a
                                href="https:/www.instagram.com/beergardenjkt">@beergardenjkt</a>
                        </div>
                    </div>
                    <a href="http://bit.ly/WhatsAppRSVPBG" class="btn_rsvp">RSVP</a>
                </div>

            </section>
        </div>

        @include('components.footer')



    </div>

@endsection
