@extends('components.master')
@section('title', 'HOME')

@section('container')
    <div class="sections_wrapper ">
        <section class="home_slider slider_section">
            <div class="scrolldown">
            </div>
            <div class="slider_wrapper">
                <div class="slider_each " color="white">
                    <img class="slider_img" src="{{ asset('assets/img/home_image.jpg') }}">
                    <img class="slider_img mobile" src="{{ asset('assets/img/home_image.jpg') }}">
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
