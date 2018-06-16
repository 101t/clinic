@extends('web.layouts.base')
@section('title', $post->title)
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<div class="js__parallax-window" style="background: url({{ asset('assets/img/bg/06.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <div class="g-margin-b-60--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">{{ $post->title }}</h1>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">{{ $post->created_at->toDayDateTimeString() }}</p>
        </div>
        <a href="#js__scroll-to-section">
            <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
        </a>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row">
        <div class="col-md-8">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-margin-b-10--xs">{{ $post->title }}</h2>
            <p style="font-size:80%;">{{ $post->created_at->toDayDateTimeString() }} - {{ $post->user->name }}</p>
            <p class="g-margin-b-5--xs">{{ $post->body }}</p>
            <p>
                {{ __("Category") }}: <span class="label label-success" style="background-color:#2ecc71;">{{ $post->category->name }}</span> <br>
                {{ __("Tags") }}:
                @forelse ($post->tags as $tag)
                    <span class="label label-default" style="background-color:#bdc3c7;">{{ $tag->name }}</span>
                @empty
                    <span class="label label-danger" style="background-color:#e74c3c;">{{ __("No tag found.") }}</span>
                @endforelse
            </p>
        </div>
        <div class="col-md-4">
            <img src="/{{ $post->img }}" alt="{{ $post->name }}" style="width:100%;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p><strong>{{ __("Comments") }}</strong></p>
            @includeWhen(Auth::user(), 'web.layouts._commentform')
            @forelse ($post->comments as $comment)
                <p>{{ $comment->body }} <br>
                    <small style="font-size:70%;font-weight:bold;">
                        {{ $comment->user->name }}
                        <span> . {{ $comment->created_at->diffForHumans() }}</span>
                    </small>
                </p>
            @empty
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>{{ __("No comment found for this post.") }}</p>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</div>
@include('web.layouts.footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/libs/components/faq.min.js') }}"></script>
@endsection