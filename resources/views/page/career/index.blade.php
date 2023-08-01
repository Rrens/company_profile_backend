@extends('components.master')
@section('title', 'CAREER')

@section('container')
    <div class="sections_wrapper ">


        <section class="title_text header_padding">
            <div class="_wrapper title_style">SUPERB QUALITY BLOOD WANTED!</div>
        </section>
        <section class="container_career spaceBottom _grow">
            <div class="_wrapper">
                <div class="body_style_left">We are always on the lookout for reliable and dedicated individuals who
                    live and breathe F&amp;B.<br /><br />So if you <strong>love</strong> to eat, midday drinking, and
                    plan to go extra miles to make the F&amp;B industry your legacy, we want you to join our growing
                    family.</div>
                <div class="career_list">
                    <ul>
                        @foreach ($data as $item)
                            <li><a href="{{ route('career.select_career', $item->position) }}">{{ $item->position }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        @include('components.footer')
    </div>
@endsection
