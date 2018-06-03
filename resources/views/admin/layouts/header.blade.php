<!-- header header  -->
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('admin:home') }}">
                <!-- Logo icon -->
                <b><img src="{{ asset('admin/img/logo.png') }}" alt="homepage" class="dark-logo" style="width:100%;" /></b>
                <!--End Logo icon -->
            </a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
            <!-- User profile and search -->
            <ul class="navbar-nav my-lg-0">
                <!-- Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="dropdown-user">
                            <li><a href="#"><i class="ti-user"></i> {{ __('Profile') }}</a></li>
                            <li><a href="#"><i class="ti-settings"></i> {{ __('Setting') }}</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End header header -->