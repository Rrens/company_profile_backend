@extends('components.master')
@section('title', 'CAREER')

@section('container')
    <div class="sections_wrapper ">


        <section class="title_text subheader_padding">
            <div class="_wrapper title_style">{{ $data->position }}</div>
        </section>
        <section class="container_career">
            <div class="_wrapper">
                <div class="body_style_left">Are you a social butterfly wondering if that could pay your bills?</div>
                <div class="career_sidetext spaceBottom _grow default__style">
                    <div class="career_spec">
                        <span>SPECIFICATIONS</span>
                        <p><br />Make sure that you:</p>
                        <ul>
                            {!! $data->description !!}
                        </ul>
                        <span class="career_apply">To apply, please send your CV to <a href="#">admin@1010-group.com</a>
                            or click the button below.</span>
                    </div><a href="mailto:" class="btn_apply">LET ME IN</a>
                </div>
            </div>
        </section>
        @include('components.footer')
    </div>
@endsection
