{{-- <div class="loader_cover">
    <div id="lottie_container" class="lottie"></div>
    <canvas id="favicon" hidden width=32 height=32></canvas>
</div> --}}
<div id="header_close" class="close_btn on_header"><span></span> <span></span></div>
<div class="menu_wrapper boxhover">
    <div>
        <ul>
            <li><a href="{{ route('brand.index') }}">BRANDS</a>
            </li>
            <li><a href="{{ route('event.index') }}">EVENTS & PROGRAMS</a>
            </li>
            <li><a href="{{ route('career.index') }}">CAREERS</a>
            </li>
            <li><a href="{{ route('contact.index') }}">CONTACT</a>
            </li>

            {{ $data }}
        </ul>
        <section class="brand_sliders white">
            <div class="bs_collapse_head">OUTLETS <img src="{{ asset('assets/img/icon/arrow_down.svg') }}"></div>
            <div class="brand_slider_wrapper dragscroll">
                @foreach ($data as $item)
                    <a class="each_brand_slider" href="{{ route('brand.select', $item->name) }}">{{ $item->name }}</a>
                @endforeach

            </div>
            <div class="__nav prev"><svg class="nav_arrow" width="14px" height="9px" viewBox="0 0 14 9"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2"
                        fill="transparent">
                        <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                    </g>
                </svg></div>
            <div class="__nav next"><svg class="nav_arrow" width="14px" height="9px" viewBox="0 0 14 9"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-337.000000, -21.000000)" stroke="#000000" stroke-width="2"
                        fill="transparent">
                        <polyline points="338 22 344.070504 28.3529412 350 22.1475688"></polyline>
                    </g>
                </svg></div>
        </section>
    </div>
</div>
