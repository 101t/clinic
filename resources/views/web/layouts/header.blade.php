<div class="container">
    <div class="clinik-topmenu">
        <div class="wrapper">
            <div class="mnu-left">
                <p>{!! trans("Appointment Number <strong>$CONFIG->phone1</strong>") !!}</p>
            </div>
            <div class="mnu-right">
                <ul>
                    <!--<li><a href="javascript:void(0)"><img src="assets/img/flags/tr.svg" width="26"></a></li>
                    <li><a href="javascript:void(0)"><img src="assets/img/flags/en.svg" width="26"></a></li>
                    <li><a href="javascript:void(0)"><img src="assets/img/flags/ar.svg" width="26"></a></li>
                    <li><a href="javascript:void(0)"><img src="assets/img/flags/fr.svg" width="26"></a></li>-->
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a rel="alternate" hreflang="{{ $properties['native'] }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <img src="{{ asset('assets/img/flags/'.$localeCode.'.svg') }}" alt="{{ $properties['native'] }}" width="26">
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="navbar-fixed-top s-header-v2 js__header-sticky clinik-mainmenu">
    <!-- Navbar -->
    <nav class="s-header-v2__navbar">
        <div class="container g-display-table--lg">
            <!-- Navbar Row -->
            <div class="s-header-v2__navbar-row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="s-header-v2__navbar-col">
                    <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                        <span class="s-header-v2__toggle-icon-bar"></span>
                    </button>
                </div>

                <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                    <!-- Logo -->
                    <div class="s-header-v2__logo">
                        <a href="{{ route('web.home') }}" class="s-header-v2__logo-link">
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="{{ $CONFIG->logo ? '/'.$CONFIG->logo : asset('assets/img/logo-white.png') }}" alt="Logo">
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="{{ $CONFIG->logo2 ? '/'.$CONFIG->logo2 : asset('assets/img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                
                <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                        <ul class="s-header-v2__nav">
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.about') }}" class="s-header-v2__nav-link">{{ __('About') }}</a></li>
                            <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Hair Transplantation') }} <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                    @forelse (\App\Models\HairTrans::where("lang", LaravelLocalization::getCurrentLocale())->take(10)->get() as $hairtrans)
                                    <li><a href="{{ route('web:hairtrans_detail', [$hairtrans->slug]) }}" class="s-header-v2__dropdown-menu-link">{{ $hairtrans->name }}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Patient Guide') }} <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                    @forelse (\App\Models\PatientGuide::where("lang", LaravelLocalization::getCurrentLocale())->take(10)->get() as $patientguide)
                                    <li><a href="{{ route('web:patientguide_detail', [$patientguide->slug]) }}" class="s-header-v2__dropdown-menu-link">{{ $patientguide->name }}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.faq') }}" class="s-header-v2__nav-link">{{ __('FAQ') }}</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.videos') }}" class="s-header-v2__nav-link">{{ __('Videos') }}</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.blog') }}" class="s-header-v2__nav-link">{{ __('Blog') }}</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.contacts') }}" class="s-header-v2__nav-link s-header-v2__nav-link--dark">{{ __('Contacts') }}</a></li>
                        </ul>
                    </div>
                    <!-- End Nav Menu -->
                </div>
            </div>
            <!-- End Navbar Row -->
        </div>
    </nav>
    <!-- End Navbar -->
</header>