<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	@include('admin.layouts.meta')
  	@yield('meta')
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>@yield('title')</title>
	@include('admin.layouts.css')
	@yield('css')
</head>
<body class="fix-header fix-sidebar">
<div class="preloader">
<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<div id="main-wrapper">
	@include('admin.layouts.header')
	@include('admin.layouts.sidebar')
	<div class="page-wrapper">
		<div class="container">
            <div class="row">
                @include('flash::message')
            </div>
        </div>
		@yield('content')
		@include('admin.layouts.footer')
	</div>
</div>
@include('admin.layouts.js')
@yield('js')
</body>
</html>