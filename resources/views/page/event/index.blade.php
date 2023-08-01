@extends('components.master')
@section('title', 'EVENT')

@section('container')
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
                <p>THIS ONLINE SHOP IS FOR ILLUSTRATIVE PURPOSE ONLY. TO ORDER, CLICK THIS <a href="#">WHATSAPP
                        LINK</a> TO GET CONNECTED TO OUR CREW.</p>
            </div><span class="popup__text_btn popup__close"><span>CLOSE</span></span>
        </div>
        <div class="popup__bg"></div>
    </div>



    <div class="sections_wrapper ">
        <section class="title_text header_padding bottom_border">
            <div class="_wrapper title_style">THE HAPPENINGS YOU DON'T WANNA MISS</div>
        </section>
        <div class="___wrapper">
            @foreach ($data as $item)
                <section class="container_event_title getposition">
                    <a href="{{ route('brand.select', $item->brand[0]->name) }}"
                        class="brand_event_title">{{ $item->brand[0]->name }}</a>
                </section>
                <section class="container_event">
                    <div class="events_promotion_title">
                        <span class="events_title">SPECIAL EVENTS</span>
                        <span class="promotion_title">WEEKLY PROGRAMS</span>
                    </div>
                    <div class="ep_content">
                        <div class="events_text">
                            @if ($item->category == 'SPECIAL EVENT')
                                <span class="inner_text_all">
                                    <p>{{ date('l, M d Y', strtotime($item->date)) }}, {{ $item->open_time }} to
                                        {{ $item->close_time }}</p>
                                    <p class="popup" data-popuptype="image"
                                        data-imgsrc="{{ empty($item->image) ? '-' : asset('storage/uploads/event/' . $item->image) }}">
                                        {{ $item->name }}</p>
                                </span>
                            @else
                                <span class="inner_text_all">
                                    <p> NO PROGRAMS</p>
                                </span>
                            @endif
                        </div>

                        <div class="promotion_text">
                            @if ($item->category == 'WEEKLY PROGRAMS')
                                <span class="inner_text_all">
                                    <p>{{ date('l, M d Y', strtotime($item->date)) }}, {{ $item->open_time }} to
                                        {{ $item->close_time }}</p>
                                    <p class="popup" data-popuptype="image"
                                        data-imgsrc="{{ empty($item->image) ? '-' : asset('storage/uploads/event/' . $item->image) }}">
                                        {{ $item->name }}</p>
                                </span>
                            @else
                                <span class="inner_text_all">
                                    <p> NO PROGRAMS</p>
                                </span>
                            @endif
                        </div>

                        {{-- <div class="promotion_text">
                            <span class="inner_text_all">
                                <p> NO PROGRAMS</p>
                            </span>
                        </div> --}}
                    </div>
                </section>
            @endforeach
        </div>

        @include('components.footer')
    </div>
@endsection
