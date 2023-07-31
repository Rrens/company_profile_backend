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
                @foreach ($data as $item)
                    <span class="each_brand_slider">{{ $item->name }}</span>
                @endforeach
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
            @foreach ($data as $item)
                <section class="brand_container_title getposition bottom_border">
                    <a href="{{ route('brand.select', $item->name) }}" class="brand_title">{{ $item->name }}</a>
                </section>
                <section class="brand_container no_border_top">
                    <div class="_wrapper brands active">
                        <a href="{{ route('brand.select', $item->name) }}" class="link_img">
                            <img class="img_brands progressive__load"
                                src="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail->where('id_brand', $item->id)->first()['image']) }}">
                        </a>
                        <div class="brand_text active">
                            <div class="brand_text_left default__style">
                                <strong>{{ $item->name }}</strong><br />{{ $item->address }}
                            </div>
                            <div class="brand_text_right default__style">
                                {{ $item->open_outlet_day }} - {{ $item->close_outlet_day }} :
                                {{ $item->open_outlet_time }}
                                - {{ $item->close_outlet_time }} WIB<br /><br />(08)
                                {{ $item->phone }}<br /><br /><a
                                    href="https://www.instagram.com/{{ $item->instagram }}/">{{ '@' . $item->instagram }}</a>
                            </div>
                        </div>
                        <a href="https://wa.me/{{ $item->instagram }}" class="btn_rsvp">RSVP</a>
                    </div>
                </section>
            @endforeach

        </div>

        @include('components.footer')



    </div>

@endsection
