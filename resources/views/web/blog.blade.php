@extends('web.layouts.base')
@section('title', 'Web Draw | About')
@section('css')
@endsection
@section('content')
@include('web.layouts.header')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-position--center js__parallax-window" style="background: url({{ asset('assets/img/bg/09.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Dr. Salim Balin Clinik</p>
        <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Our Blog</h1>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
	<div class="g-text-center--xs g-margin-b-80--xs">
	    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
	    <h2 class="g-font-size-32--xs g-font-size-36--md">Latest News</h2>
	</div>
	<div class="row">
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/01.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Create Something Great.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/02.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Jacks of All. Experts in All.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/03.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Finding your Perfect Place.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/01.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Create Something Great.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/02.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Jacks of All. Experts in All.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/03.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Finding your Perfect Place.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/01.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Create Something Great.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/02.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Jacks of All. Experts in All.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	    <div class="col-sm-4">
	        <!-- News -->
	        <article>
	            <img class="img-responsive" src="{{ asset('assets/img/970x970/03.jpg') }}" alt="Image">
	            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
	                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
	                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="javascript:void(0)">Finding your Perfect Place.</a></h3>
	                <p>The time has come to bring those ideas and plans to life.</p>
	            </div>
	        </article>
	        <!-- End News -->
	    </div>
	</div>
</div>
<!-- Parallax -->
<div class="js__parallax-window" style="background: url({{ asset('assets/img/bg/03.jpg') }}) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-margin-b-80--xs">
            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">The Fastest Way To Develop</h2>
        </div>
        <a href="http://keenthemes.com/" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>
    </div>
</div>
<!-- End Parallax -->
<!-- Features -->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-100--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">We Create Beautiful Experiences <br> That Drive Successful Businesses.</h2>
    </div>
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                        <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Responsive Layout</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                        <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Fully Customizable</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                        <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Pixel Perfect</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
    <div class="row">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                        <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                        <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                        <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Parallax Support</h3>
                    <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
</div>
<!-- End Features -->
@include('web.layouts.footer')
@endsection
@section('js')
@endsection