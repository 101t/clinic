@extends('web.layouts.base')
@section('title', 'Dr. Salim Balin | Contacts')
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PAGE CONTENT ==========-->
<!-- Feedback Form -->
<div class="g-position--relative g-bg-color--primary">
    <div class="g-container--md g-padding-y-125--xs">
        <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">{{ trans('Contact Us') }}</p>
            <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">{{ trans('Get in Touch') }}</h2>
        </div>
        <div class="row g-row-col--5 g-margin-b-80--xs">
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{ trans('Email') }}</h4>
                    <p class="g-color--white-opacity">{{ $CONFIG->email }}</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{ trans('Address') }}</h4>
                    <p class="g-color--white-opacity">{{ $CONFIG->address }}</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{ trans("Call at") }}</h4>
                    <p class="g-color--white-opacity">{{ $CONFIG->phone1 }}</p>
                </div>
            </div>
        </div>
        <form class="center-block g-width-500--sm g-width-550--md">
            <div class="g-margin-b-30--xs">
                <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
            </div>
            <div class="row g-row-col-5 g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                </div>
            </div>
            <div class="g-margin-b-80--xs">
                <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">{{ trans('Send') }}</button>
            </div>
        </form>
    </div>
    <img class="s-mockup-v2" src="{{ asset('assets/img/mockups/pencil-01.png') }}" alt="Mockup Image">
</div>
<!-- Google Map -->
<section class="s-google-map">
    <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
</section>
<!-- End Google Map -->
<!-- End Feedback Form -->
<!--========== END PAGE CONTENT ==========-->
@include('web.layouts.footer')
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
<script type="text/javascript" src="{{ asset('assets/libs/components/google-map2.js') }}"></script>
@endsection