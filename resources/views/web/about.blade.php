@extends('web.layouts.base')
@section('title', 'Dr. Salim Balin | About')
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-position--center js__parallax-window" style="background: url({{ asset('assets/img/bg/10.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">{{ $CONFIG->name }}</p>
        <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">{{ __('About') }}</h1>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<!-- Culture -->
<div class="g-promo-section">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row">
            <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">{{ __('About') }}</p>
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h4 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">{{ $CONFIG->name }}</h4>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <p class="g-font-size-18--xs">{{ $CONFIG->about }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
        <img class="img-responsive" src="{{ asset('assets/img/970x970/03.jpg') }}" alt="Image">
    </div>
</div>
<!-- Speakers -->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row g-overflow--hidden">
        @forelse (\App\Models\Doctor::where('lang', LaravelLocalization::getCurrentLocale())->take(4) as $doctor)
        <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
            <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                <img class="img-responsive g-width-100-percent--xs" src="{{ $doctor->img ? '/'.$doctor->img : asset('assets/img/400x400/03.jpg') }}" alt="Image">
                <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">{{ $doctor->name }}</h4>
                    </div>
                    <p class="g-font-weight--700">{{ $doctor->major }}</p>
                    <p>{{ $doctor->body }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-xs-6 g-full-width--xs">
            <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                <img class="img-responsive g-width-100-percent--xs" src="{{ asset('assets/img/400x400/03.jpg') }}" alt="Image">
                <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Lucas Richardson</h4>
                    </div>
                    <p class="g-font-weight--700">Doctor</p>
                    <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                </div>
            </div>
        </div>
        @endforelse
    </div>
</div>
<!-- End Speakers -->
<!-- End Culture -->
@include('web.layouts.footer')
@endsection
@section('js')
@endsection