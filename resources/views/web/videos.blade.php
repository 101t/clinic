@extends('web.layouts.base')
@section('title', 'Dr. Salim Balin | Videos')
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<section class="s-video-v2__bg" data-vidbg-bg="mp4: {{ asset('assets/include/media/mp4_video.mp4') }}, webm: {{ asset('assets/include/media/webm_video.webm') }}, poster: {{ asset('assets/include/media/fallback.jpg') }}" data-vidbg-options="loop: true, muted: true, overlay: false">
    <div class="container g-position--overlay g-text-center--xs">
        <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
            <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Our Videos</h1>
        </div>
    </div>
</section>
<!--========== END PROMO BLOCK ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Mockup -->
<div class="container g-margin-t-o-150--xs">
    <div class="center-block s-mockup-v1">
        <img class="img-responsive" src="{{ asset('assets/img/mockups/devices-01.png') }}" alt="Mockup Image">
    </div>
</div>
<!-- End Mockup -->

<!-- Portfolio -->
<div class="container g-padding-y-80--xs g-padding-y-125--xsm">
    <div class="row g-margin-b-30--xs">
        <div class="col-md-6 g-margin-b-30--xs">
            <div class="g-margin-t-20--md g-margin-b-40--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">{{ __("Hair Transplantation") }}</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">{{ __("Videos") }}</h2>
                <p>{!! __("We are masters of most current technologies.<br>Check us out our experience that we know we're good at.") !!}</p>
            </div>
        </div>
        @foreach (\App\Models\Video::all()->take(10) as $video)
        <div class="col-md-6 g-margin-b-30--xs">
            {!! LaravelVideoEmbed::parse($video->url) !!}
        </div>
        @endforeach
    </div>
</div>
<!-- End Portfolio -->
@include('web.layouts.footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/libs/vidbg.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/libs/waypoint.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/libs/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/libs/components/portfolio-4-col-slider.min.js') }}"></script>
@endsection