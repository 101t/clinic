@extends('web.layouts.base')
@section('title', 'FAQ')
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<div class="js__parallax-window" style="background: url({{ asset('assets/img/bg/06.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <div class="g-margin-b-60--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">FAQ</h1>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">Your Questions. Answered.</p>
        </div>
        <a href="#js__scroll-to-section">
            <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
        </a>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
@include('web.layouts.footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/libs/components/faq.min.js') }}"></script>
@endsection