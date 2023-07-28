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
        <div class="_wrapper dropdown__wrapper dragscroll"><span>HAPPENINGS</span> <span>GALLERY</span> <span>MENU</span>
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
                <div class="slider_each" color="white">
                    <img class="slider_img" src="https://biko-group.com/files/2021/11/03/61827e6d9237f59029566051.jpeg">
                    <img class="slider_img mobile"
                        src="https://biko-group.com/files/2021/11/03/61827e742163160636355243.jpeg">
                </div>
                <div class="slider_each" color="white">
                    <img class="slider_img" src="https://biko-group.com/files/2021/11/03/61827e802918f65479174504.jpeg">
                    <img class="slider_img mobile"
                        src="https://biko-group.com/files/2021/11/03/61827e859b08a59221572867.jpeg">
                </div>

            </div>
            <div class="slider_navs white"></div>
        </section>
        <section class="heading_text bottom_border">
            <div class="_wrapper body_style">
                <p>The first Beer Garden outlet was established in 2010, two years before Biko Group was founded. The
                    laidback vibe and affordable beer price at Beer Garden are antidotes against the high-priced beers
                    and petty requirements - among those, for instance, is strict dress code - that are imposed in most
                    bars in Jakarta.<br /><br />Beer Garden was subsequently awarded the <strong>Best Beer
                        House</strong> by <em>FREE MAGZ</em> for two consecutive years, from 2011 to 2012. In 2013, the
                    outlet was dubbed as the <strong>Best Pub / Sports Bar</strong> by <em>NOW Jakarta</em> magazine and
                    win the same award all over again in 2014.<br /><br />Beer Garden now boasts three outlets in
                    Jakarta: SCBD, Radio Dalam, and Hublife - the last one marks its expansion to reach greater market
                    all around the capital.</p>
            </div>
        </section>
        <section id="happenings" class="brand_title getposition">
            <div class="_wrapper">HAPPENINGS</div>
        </section>
        <section class="happenings_content bottom_border">
            <div class="_wrapper dragscroll">
                <span class="each_happening popup" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2022/05/10/627a48921f14069912757509.jpeg">
                    <img class="poster_img progressive__load"
                        data-src="https://biko-group.com/files/2022/05/10/627a489a6a59c44570733379.jpeg">
                </span>

            </div>
        </section>
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
                    <g fill="none" fill-rule="evenodd" transform="translate(-26.000000, -1538.000000)"
                        stroke="#000000" stroke-width="2" stroke-linecap="round">
                        <polyline id="Path-2"
                            transform="translate(39.000000, 1564.111111) rotate(90.000000) translate(-39.000000, -1564.111111) "
                            points="14 1553 39.2937672 1575.22222 64 1553.51619"></polyline>
                    </g>
                </svg></div>
            <div class="brand_gallery_wrapper">
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e95b1e757660489581046.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e95b600b8f56639945581.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e959f76a0051947574869.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e95a4462ce56305136512.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e95c0ad2e064485147539.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e95c41178354833993249.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e9586235c763756373349.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e95926829260077955687.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e953becde059901952581.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e9544daed359476770831.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e9523089fc58068757797.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e95288800761238794411.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e950f7e96859574773617.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e9513e486f64930342167.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e94fbe912251241515091.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e9500efd4851577130437.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2021/10/19/616e94e8723ee60563152990.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2021/10/19/616e94ef5b09566431194667.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2020/08/12/5f341f516d1c788596393157.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2020/08/12/5f341f3dcf7d655146737802.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2020/08/12/5f341efd22e2686203530062.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2020/08/12/5f341ef31f32e28756784633.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2020/08/12/5f341e86613b981552745074.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2020/08/12/5f341e99053d938518375341.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2020/08/12/5f341e66d7df592613113057.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2020/08/12/5f341bce0448453492736749.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2020/08/12/5f341b63f3c8e56499120330.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2020/08/12/5f341b58b18e531502344522.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2019/05/09/5cd3f7a17533a28066368327.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2019/05/09/5cd3f7a523abe28066334369.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2019/02/15/5c668a587d93747578359456.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2019/03/05/5c7dfcac98b3063727535708.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2019/02/18/5c6a64a83c2e041055563161.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2019/03/05/5c7dfcb72233d62427190895.jpeg">
                </div>
                <div class="slider_each popup" index="0" data-popuptype="image"
                    data-imgsrc="https://biko-group.com/files/2019/02/18/5c6a64e19b8ae75172346176.jpeg">
                    <img class="slider_img progressive__load" src=""
                        data-src="https://biko-group.com/files/2019/02/18/5c6a64e8f18bc75172355821.jpeg">
                </div>

            </div>
        </section>
        <section id="menu" class="brand_title getposition">
            <div class="_wrapper">MENU</div>
        </section>
        <section class="menu_section">
            <div class="_wrapper btn_2_wrapper">
                <a href="/files/food+menu+-+november+%281%29.pdf" target="_blank" class="menu_btn_2">FOOD</a>
                <a href="/files/bev+bg+scbd+-+november+%282%29.pdf" target="_blank" class="menu_btn_2">DRINK</a>
            </div>

        </section>


    </div>


    <section id="contact" class="brand_title getposition bottom_border">
        <div class="_wrapper">CONTACT</div>
    </section>
    <section class="brand_container no_border_top">
        <div class="brand_multiple_selector">
            <div class="_wrapper dragscroll">
                <span class="active">SCBD</span>
                <span>RADIO DALAM</span>

            </div>
        </div>

        <div class="_wrapper brands active">
            <a href="" class="link_img">
                <img class="img_brands progressive__load"
                    src="https://biko-group.com/files/2019/03/20/5c91f890cfdd391425542180.jpeg">
            </a>
            <div class="brand_text active">
                <div class="brand_text_left default__style">
                    <strong>Beer Garden SCBD</strong><br />Lot 8 SCBD<br />Jl. Jend. Sudirman Kav 52-53<br />West
                    Jakarta<br />12190
                </div>
                <div class="brand_text_right default__style">
                    Mon - Sun: 4 PM - 2 AM<br /><br /><a href="https://www.instagram.com/beergardenjkt">@beergardenjkt</a>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=6281380085856" class="btn_rsvp">RSVP</a>
        </div>
        <div class="_wrapper brands ">
            <a href="" class="link_img">
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
                        href="/wm/https:/www.instagram.com/beergardenjkt">@beergardenjkt</a>
                </div>
            </div>
            <a href="http://bit.ly/WhatsAppRSVPBG" class="btn_rsvp">RSVP</a>
        </div>

    </section>

    <section class="spacing70 _grow desktop_only" style="height: 70px"></section>
    <section class="brand_sliders nbb">
        <div class="bs_collapse_head">OUTLETS <img src="{{ asset('assets/img/icon/arrow_down.svg') }}"></div>
        <div class="brand_slider_wrapper dragscroll">
            <a class="each_brand_slider" href="/beer-garden">BEER GARDEN</a>
            <a class="each_brand_slider" href="/fujin">FŪJIN</a>
            <a class="each_brand_slider" href="/pippo-italian">PIPPO ITALIAN</a>
            <a class="each_brand_slider" href="/beer-hall">BEER HALL</a>
            <a class="each_brand_slider" href="/duck-down-bar">DUCK DOWN BAR</a>
            <a class="each_brand_slider" href="/black-pond-tavern">BLACK POND TAVERN</a>
            <a class="each_brand_slider" href="/acta">ACTA BRASSERIE</a>
            <a class="each_brand_slider" href="/cantinero">CANTINERO</a>
            <a class="each_brand_slider" href="/silk-bistro">SILK BISTRO</a>

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
