@extends('components.master')
@section('title', 'HOME')

@section('container')
    <div class="sections_wrapper ">
        <section class="home_slider slider_section">
            <div class="scrolldown">
            </div>
            <div class="slider_wrapper">
                <div class="slider_each " color="white">
                    <img class="slider_img" src="https://biko-group.com/files/2021/12/30/61cd74f1e7e4c43198739045.jpeg">
                    <img class="slider_img mobile"
                        src="https://biko-group.com/files/2021/12/27/61c9925ee902b42570355599.jpeg">
                </div>

                <!-- <div class="slider_each" color="black"><img class="slider_img" src="images/demo_asset/thumb_4.jpg"></div>
                                <div class="slider_each" color="white"><img class="slider_img" src="images/demo_asset/thumb_2.jpg"></div> -->
            </div>
            <div class="slider_navs"></div>
        </section>

        <section class="all_brands_module top_border">

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">BEER GARDEN</span>
                <img class="hb_logo" src="https://biko-group.com/files/2019/03/05/5c7e3b1dd8189343872487.svg">
                <img class="hb_img_bg" src="https://biko-group.com/files/2019/03/25/5c988b02034b551004772107.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">FŪJIN</span>
                <img class="hb_logo" src="https://biko-group.com/files/2021/12/28/61ca9dc8aee603620671858.png"
                    style="max-width: 120px; max-height: 120px">
                <img class="hb_img_bg" src="https://biko-group.com/files/2019/03/05/5c7e433ed174430839570309.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">PIPPO ITALIAN</span>
                <img class="hb_logo" src="https://biko-group.com/files/2019/03/05/5c7e438d837b0708615094.svg"
                    style="max-width: 120px; max-height: 120px">
                <img class="hb_img_bg" src="https://biko-group.com/files/2019/03/25/5c988bb01143054559916420.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">BEER HALL</span>
                <img class="hb_logo" src="https://biko-group.com/files/2019/03/18/5c8f672364728599822300.svg">
                <img class="hb_img_bg" src="https://biko-group.com/files/2019/03/25/5c988c53ed41052519943416.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">DUCK DOWN BAR</span>
                <img class="hb_logo" src="https://biko-group.com/files/2019/03/18/5c8f56c1a2aa02433038663.svg">
                <img class="hb_img_bg" src="https://biko-group.com/files/2019/01/30/5c5181b2a7d2558577579030.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">BLACK POND TAVERN</span>
                <img class="hb_logo" src="https://biko-group.com/files/2020/01/24/5e2a88190c1133047844734.svg">
                <img class="hb_img_bg" src="https://biko-group.com/files/2020/08/05/5f29ab6318c1322618349550.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">ACTA BRASSERIE</span>
                <img class="hb_logo" src="https://biko-group.com/files/2020/01/21/5e26c4b469da8779047556.svg">
                <img class="hb_img_bg" src="https://biko-group.com/files/2020/03/02/5e5ccc05cb5e011543546128.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">CANTINERO</span>
                <img class="hb_logo" src="https://biko-group.com/files/2022/09/12/631ee1a5e8c2a17619434839.png"
                    style="max-width: 120px; max-height: 120px">
                <img class="hb_img_bg" src="https://biko-group.com/files/2022/08/30/630dffdc529e762782368344.jpeg">
            </a>

            <a class="all_brands_module_each white" href="beer-garden.html">
                <span class="hb_title">SILK BISTRO</span>
                <img class="hb_logo" src="https://biko-group.com/files/2022/12/28/63abdfe33101b1247043710.png">
                <img class="hb_img_bg" src="https://biko-group.com/files/2022/12/28/63abdfdb3c2db39134624954.png">
            </a>

            @include('components.footer')
        </section>

    </div>

@endsection
