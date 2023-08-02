<header class="_transparent {{ !empty($page) ? ($page == 'brand_each' ? 'nbb' : '') : '' }}">
    <div class="header_menu_btn_w anim_in">
        <div class="menu_btn"><span></span> <span></span> <span></span></div>
    </div>
    <a href="{{ route('home') }}">
        {{-- <svg id="header_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.09 60.95">
            <g id="Layer_1-2" data-name="Layer 1">
                <path
                    d="M8.09,33.56v18.9H23.87q5.52,0,8.73-2.4A8.28,8.28,0,0,0,35.8,43a8.32,8.32,0,0,0-3.16-7Q29.48,33.55,23,33.56Zm0-25.07V26.27H20.58c3.31,0,5.88-.84,7.69-2.52A8.32,8.32,0,0,0,31,17.38a8.09,8.09,0,0,0-2.81-6.53c-1.87-1.57-4.64-2.36-8.33-2.36ZM20.82,1q9.06,0,13.7,4.17t4.64,11.37a15.25,15.25,0,0,1-.6,4.4A12.61,12.61,0,0,1,37,24.47,13,13,0,0,1,34.72,27a12,12,0,0,1-2.52,1.72,21.08,21.08,0,0,1,4.64,1.8,13.9,13.9,0,0,1,3.76,2.93,13,13,0,0,1,2.53,4.24,16.4,16.4,0,0,1,.92,5.69,16.42,16.42,0,0,1-1.44,7,14.46,14.46,0,0,1-4,5.16,18.37,18.37,0,0,1-6.08,3.21,25.77,25.77,0,0,1-7.77,1.12H0V1Z" />
                <rect class="cls-1" x="55.39" y="1.04" width="8.17" height="58.87" />
                <polygon class="cls-1"
                    points="109.77 1.04 85.66 43.41 85.66 1.04 77.5 1.04 77.5 59.91 83.82 59.91 97.84 36.76 113.78 59.91 123.63 59.91 102.48 29.39 119.38 1.04 109.77 1.04" />
                <path class="cls-1"
                    d="M154.38,7.53a21.27,21.27,0,0,0-8.65,1.72A19.7,19.7,0,0,0,139,14.06a22.68,22.68,0,0,0-4.4,7.28,25.53,25.53,0,0,0-1.6,9.17,25.5,25.5,0,0,0,1.6,9.17,22.22,22.22,0,0,0,4.4,7.25,20,20,0,0,0,6.73,4.77,22.51,22.51,0,0,0,17.26,0,19.88,19.88,0,0,0,6.77-4.77,22.22,22.22,0,0,0,4.4-7.25,25.5,25.5,0,0,0,1.6-9.17,25.53,25.53,0,0,0-1.6-9.17,22.68,22.68,0,0,0-4.4-7.28A19.58,19.58,0,0,0,163,9.25a21.32,21.32,0,0,0-8.61-1.72m0-7.53a30.46,30.46,0,0,1,11.86,2.28,28,28,0,0,1,9.4,6.37,29.19,29.19,0,0,1,6.21,9.69,32.4,32.4,0,0,1,2.24,12.17,32.29,32.29,0,0,1-2.24,12.22,28.94,28.94,0,0,1-6.21,9.61,28.38,28.38,0,0,1-9.4,6.33,32,32,0,0,1-23.71,0A28.1,28.1,0,0,1,127,42.73a32.88,32.88,0,0,1-2.2-12.22A33,33,0,0,1,127,18.34a28.79,28.79,0,0,1,6.17-9.69,28.08,28.08,0,0,1,9.41-6.37A30.37,30.37,0,0,1,154.38,0" />
            </g>
        </svg> --}}
        {{-- <svg version="1.2" id="header_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 278 44" width="278"
            height="44">
            <defs>
                <image width="278" height="44" id="img1"
                    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAAsCAMAAACXBWcCAAAAAXNSR0IB2cksfwAAAq9QTFRFAAAA////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////J9QBRAAAAOV0Uk5TAAJX2v+BImy37vTCeDIBBGbjbjXimbPzLqn1E1Sq5/v+7bZgGjS1+Czdpr8YhIbY/eWOOiab8CDVxAXe1lDH/B7cjDEDD8sWPfl56JBKvPq5KCOoHd9D1w2KoFGNYqIwEHR8ZyvGU+9cRcwRyECSCJ4p8eE3DOquhReL0Ua4H8MvB0/QpxLJj/Lmdz5M9k3UR+RB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" />
            </defs>
            <style>
            </style>
            <use id="Layer 1" href="#img1" x="0" y="0" />
        </svg> --}}
        <img src="{{ asset('assets/img/logo.png') }}" id="header_logo" alt="">
    </a>
    <a href="{{ route('home') }}"><svg id="header_logo_mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <title>Biko Logo</title>
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
