<div class="container">
    <div class="clinik-topmenu">
        <div class="wrapper">
            <div class="mnu-left">
                <p>Appointment Number <strong>+(90) 423 234 2343</strong></p>
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
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="{{ asset('assets/img/logo-white.png') }}" alt="Logo">
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                
                <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                        <ul class="s-header-v2__nav">
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.about') }}" class="s-header-v2__nav-link">About</a></li>
                            <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hair Transplantation <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Hair Transplantation</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Sapphire FUE Hair Transplant</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">DHI Hair Transplant</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Beard Transplantation</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Eyebrow Transplantation</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Hair Mesotherapy</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">PRP Hair Treatment</a></li>
                                </ul>
                            </li>
                            <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient Guide <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Before Hair Transplant Operation</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">After Hair Transplantation</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Post Operative Hair Wash</a></li>
                                    <li><a href="javascript:void(0)" class="s-header-v2__dropdown-menu-link">Hair Transplant in Turkey</a></li>
                                </ul>
                            </li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.faq') }}" class="s-header-v2__nav-link">FAQ</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.videos') }}" class="s-header-v2__nav-link">Videos</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.blog') }}" class="s-header-v2__nav-link">Blog</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ route('web.contacts') }}" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Contacts</a></li>
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