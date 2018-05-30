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
        <div class="col-sm-4">
            <div class="g-margin-t-20--md g-margin-b-40--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Hair Transplantation</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">Videos</h2>
                <p>We are masters of most current technologies.<br>Check us out and enjoy things that we know we're good at.</p>
            </div>
        </div>

        <div class="col-sm-8">
            <!-- Portfolio Gallery -->
            <div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/04.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h3>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/04.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/09.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h4>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/09.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/05.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h4>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/05.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/06.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h4>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/06.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/07.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h4>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/07.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="{{ asset('assets/img/970x647/08.jpg') }}" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Operation Video</h4>
                            <p class="g-color--white-opacity">by Dr. Salim Balin.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="{{ asset('assets/img/970x647/08.jpg') }}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Operation Video <br/> by Dr. Salim Balin.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Portfolio Gallery -->
        </div>
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