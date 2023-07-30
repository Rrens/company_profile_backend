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
            </div>
            <div class="slider_navs"></div>
        </section>

        <section class="all_brands_module top_border">
            @foreach ($brand as $item)
                <a class="all_brands_module_each white" href="{{ route('brand.select', $item->name) }}">
                    <span class="hb_title">{{ $item->name }}</span>
                    <img class="hb_logo"
                        src="{{ empty($image->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/image/' . $image->where('id_brand', $item->id)->first()['image']) }}">
                    <img class="hb_img_bg"
                        src="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail->where('id_brand', $item->id)->first()['image']) }}">
                </a>
            @endforeach

            @include('components.footer')
        </section>

    </div>

@endsection
