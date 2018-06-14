@extends('web.layouts.base')
@section('title', $news->name )
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<div class="js__parallax-window" style="background: url({{ asset('assets/img/bg/06.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <div class="g-margin-b-60--xs">
            <h1 class="g-font-size-20--xs g-font-size-20--sm g-font-size-30--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">{{ $news->name }}</h1>
        </div>
        <a href="#js__scroll-to-section">
            <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
        </a>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <img src="/{{ $news->img }}" alt="{{ $news->name }}" style="width:100%;"><br><br>
    <h2 class="g-font-size-32--xs g-font-size-36--md">{{ $news->name }}</h2>
    <div>
        <p class="g-margin-b-5--xs">{{ $news->body }}</p>
    </div>
</div>
@include('web.layouts.footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/libs/components/faq.min.js') }}"></script>
@endsection