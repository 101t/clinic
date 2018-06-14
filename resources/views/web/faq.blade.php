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

<!--========== PAGE CONTENT ==========-->
<!-- FA Questions Text -->
<div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">What are the <br> Frequently Asked Questions?</h2>
    <div class="row g-margin-b-50--xs">
        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--sm">
            <p>This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized.</p>
            
            <div class="s-faq__pseudo g-padding-y-40--xs">
                <p class="g-color--primary g-font-family--playfair"><i>How Can I Improve myself?</i></p>
                <div class="g-margin-l-70--xs">
                    <p class="g-color--primary g-font-family--playfair"><i>How Can I Improve the World?</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs.</p>
            <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already. We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered.</p>
        </div>
    </div>
    <div class="g-text-center--xs">
        <p class="g-margin-b-5--xs">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation.</p>
        <p>Working together on the daily requires each individual to let the greater good<br>of the team’s work surface above their own ego.</p>
    </div>
</div>
<!-- End FA Questions Text -->

<!-- Accordion -->
<div class="s-faq g-bg-color--primary">
    <div class="container g-padding-y-125--xs">
        <div class="row">
            @forelse (\App\Models\Faq::all()->take(10) as $faq)
            <div class="col-sm-12">
                <div class="cbp cbp-l-grid-faq js__grid-faq">
                    <div class="cbp-item buying">
                        <div class="cbp-caption">
                            <div class="s-faq-grid__divider cbp-caption-defaultWrap" style="padding-left:0;">
                                <h2 class="s-faq-grid__title"><i class="fa {{ $faq->icon }}" style="font-size:100%;"></i> {{ $faq->name }}</h2>
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="g-color--white-opacity">
                                    {{ $faq->body }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-sm-12">
                <div class="cbp cbp-l-grid-faq js__grid-faq">
                    <div class="cbp-item buying">
                        <div class="cbp-caption">
                            <h2 class="text-center" style="color:#fff;"><i class="fa fa-question-circle" style="font-size:6rem;"></i><br><br>{{ __('There is no Frequently Asked Questions here') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- End Accordion -->

<!-- Subscribe -->
<div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-margin-b-60--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Join Over 1000+ People</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <form class="input-group">
                <input type="email" class="form-control s-form-v5__input g-radius--left-50" name="email" placeholder="Enter your email">
                <span class="input-group-btn">
                    <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--dark-brd s-btn--dark-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                </span>
            </form>
        </div>
    </div>
</div>
<!-- End Subscribe -->
<!--========== END PAGE CONTENT ==========-->
@include('web.layouts.footer')
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/libs/components/faq.min.js') }}"></script>
@endsection