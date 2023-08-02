@extends('components.master')
@section('title', 'BEER GARDEN')

@section('container')
    <div class="subheader brand_navigation dropdown__mobileonly">
        <div class="nav_collapse_head dropdown__trigger">NAVIGATION <svg id="nav_arrow" width="14px" height="9px"
                viewBox="0 0 14 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2" fill="transparent">
                    <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                </g>
            </svg></div>
        <div class="_wrapper dropdown__wrapper dragscroll">
            @if (!empty($happening->image))
                <span>HAPPENINGS</span>
            @endif
            <span>GALLERY</span>
            @if (!empty($happening->image))
                <span>MENU</span>
            @endif
            <span>CONTACT</span>
        </div>
    </div>

    <div class="popup__container dragscroll"><span class="popup__mobile-back"><span class="back_btn popup__close"><svg
                    class="backarrow" width="14px" height="9px" viewBox="0 0 14 9" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2" fill="transparent">
                        <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                    </g>
                </svg> <span>BACK</span></span></span>
        <div class="popup__image"><img src=""></div>
        <div class="popup__text">
            <div class="popup__contentwrapper">
                <p></p>
            </div><span class="popup__text_btn popup__close"><span></span></span>
        </div>
        <div class="popup__bg"></div>
    </div>

    <div class="sections_wrapper onbrand">
        <section class="brand_top_logo slider_section">
            <div class="__logo" style="max-width: 500; max-height: 500;">
                <img class="" src="https://biko-group.com/files/2019/03/05/5c7e3b23f3999343888776.svg">
            </div>
            <div class="__logo_black" style="max-width: 500; max-height: 500;">
                <img class="" src="">
            </div>
            <div class="scrolldown">
            </div>
            <div class="slider_wrapper">
                @foreach ($thumbnail as $item)
                    <div class="slider_each" color="white">
                        <img class="slider_img"
                            src="{{ empty($item->image) ? '-' : asset('storage/uploads/thumbnail/' . $item->image) }}">
                        <img class="slider_img mobile"
                            src="{{ empty($item->image) ? '-' : asset('storage/uploads/thumbnail/' . $item->image) }}">
                    </div>
                @endforeach

            </div>
            <div class="slider_navs white"></div>
        </section>
        <section class="heading_text bottom_border">
            <div class="_wrapper body_style">
                {!! $data->description !!}
            </div>
        </section>
        @if (!empty($happening->image))
            <section id="happenings" class="brand_title getposition">
                <div class="_wrapper">HAPPENINGS</div>
            </section>
            <section class="happenings_content bottom_border">
                <div class="_wrapper dragscroll">
                    <span class="each_happening popup" data-popuptype="image"
                        data-imgsrc="{{ empty($happening->image) ? '-' : asset('storage/uploads/happening/' . $happening->image) }}">
                        <img class="poster_img progressive__load"
                            data-src="{{ empty($happening->image) ? '-' : asset('storage/uploads/happening/' . $happening->image) }}">
                    </span>

                </div>
            </section>
        @endif
        <section id="gallery" class="brand_title getposition">
            <div class="_wrapper">GALLERY</div>
        </section>
        <section class="brand_gallery top_bottom_border">
            <div class="brand_gallery_btn left"><svg class="nav_arrow" width="25px" height="52px" viewBox="0 0 25 52"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="none" fill-rule="evenodd" transform="translate(-26.000000, -1538.000000)" stroke="#000000"
                        stroke-width="2" stroke-linecap="round">
                        <polyline id="Path-2"
                            transform="translate(39.000000, 1564.111111) rotate(90.000000) translate(-39.000000, -1564.111111) "
                            points="14 1553 39.2937672 1575.22222 64 1553.51619"></polyline>
                    </g>
                </svg></div>
            <div class="brand_gallery_btn right"><svg class="nav_arrow" width="25px" height="52px" viewBox="0 0 25 52"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="none" fill-rule="evenodd" transform="translate(-26.000000, -1538.000000)" stroke="#000000"
                        stroke-width="2" stroke-linecap="round">
                        <polyline id="Path-2"
                            transform="translate(39.000000, 1564.111111) rotate(90.000000) translate(-39.000000, -1564.111111) "
                            points="14 1553 39.2937672 1575.22222 64 1553.51619"></polyline>
                    </g>
                </svg></div>
            <div class="brand_gallery_wrapper">
                @foreach ($galery as $item)
                    <div class="slider_each popup" index="0" data-popuptype="image"
                        data-imgsrc="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}">
                        <img class="slider_img progressive__load" src=""
                            data-src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}">
                    </div>
                @endforeach
            </div>
        </section>
        @if (!empty($menu))
            <section id="menu" class="brand_title getposition">
                <div class="_wrapper">MENU</div>
            </section>
            <section class="menu_section">
                <div class="_wrapper btn_2_wrapper">
                    @if (!empty($menu->food))
                        <a href="{{ empty($menu->food) ? '-' : asset('storage/uploads/menu/' . $menu->food) }}"
                            target="_blank" class="menu_btn_2">FOOD</a>
                    @endif
                    @if (!empty($menu->food))
                        <a href="{{ empty($menu->drink) ? '-' : asset('storage/uploads/drink/' . $menu->drink) }}"
                            target="_blank" class="menu_btn_2">DRINK</a>
                    @endif
                </div>

            </section>
        @endif


    </div>


    <section id="contact" class="brand_title getposition bottom_border">
        <div class="_wrapper">CONTACT</div>
    </section>
    <section class="brand_container no_border_top">
        <div class="_wrapper brands active">
            <a href="{{ route('brand.select', $data->name) }}" class="link_img">
                <img class="img_brands progressive__load"
                    src="{{ empty($thumbnail[0]->image) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail[0]->image) }}">
            </a>
            <div class="brand_text active">
                <div class="brand_text_left default__style">
                    <strong>{{ $data->name }}</strong><br />{{ $data->address }}
                </div>
                <div class="brand_text_right default__style">
                    {{ $data->open_outlet_day }} - {{ $data->close_outlet_day }} :
                    {{ $data->open_outlet_time }}
                    - {{ $data->close_outlet_time }} WIB<br /><br />(08)
                    {{ $data->phone }}<br /><br /><a
                        href="https://www.instagram.com/{{ $data->instagram }}/">{{ '@' . $data->instagram }}</a>
                </div>
            </div>
            <a href="https://wa.me/{{ $data->instagram }}" class="btn_rsvp">RSVP</a>
        </div>

    </section>

    <section class="spacing70 _grow desktop_only" style="height: 70px"></section>
    <section class="brand_sliders nbb">
        <div class="bs_collapse_head">OUTLETS <img src="{{ asset('assets/img/icon/arrow_down.svg') }}"></div>
        <div class="brand_slider_wrapper dragscroll">
            @foreach ($list_brand as $item)
                <a class="each_brand_slider" href="{{ route('brand.select', $item->name) }}">{{ $item->name }}</a>
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
    @include('components.footer')
@endsection
