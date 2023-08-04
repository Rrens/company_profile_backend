<header class="_transparent {{ !empty($page) ? ($page == 'brand_each' ? 'nbb' : '') : '' }}">
    <div class="header_menu_btn_w anim_in">
        <div class="menu_btn"><span></span> <span></span> <span></span></div>
    </div>
    <a href="{{ route('home') }}">
        <img src="{{ asset('assets/img/logo.png') }}" id="header_logo" alt="">
    </a>
    <a href="{{ route('home') }}"><svg id="header_logo_mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <title>1010 GROUP Logo</title>
            <g transform="translate(1 .25)">
                <path d="M19.6 21.7c0 .8.6 1.4 1.4 1.4s1.4-.6 1.4-1.4c0-.8-.6-1.4-1.4-1.4s-1.4.7-1.4 1.4" />
                <g transform="translate(.592 .592)">
                    <path d="M28.4 15.2h-16v-16h16v16zm-14-2.1h12v-12h-12v12z" />
                    <path d="M14.4 29.2h-16v-16h16v16zm-14-2.1h12v-12H.4v12z" />
                    <path d="M28.4 29.2h-16v-16h16v16zm-14-2.1h12v-12h-12v12z" />
                    <path d="M19.4 0.2H21.4V14.2H19.4z" />
                    <path d="M12.5 29L-1 22c-.3-.2-.5-.5-.5-.9s.2-.7.5-.9l13.5-7 .9 1.8-11.8 6.2 11.8 6.1-.9 1.7z" />
                    <path d="M14.4 15.2h-16v-16h16v16zm-14-2.1h12v-12H.4v12z" />
                </g>
                <path d="M3.3 6.7H14V8.7H3.3z" />
            </g>
        </svg></a>
    <div class="header_text"></div>
</header>
