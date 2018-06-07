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
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<div class="m-page-loader m-page-loader--base">
	<div class="m-blockui">
		<span>
			{{ __("Please wait...") }}
		</span>
		<span>
			<div class="m-loader m-loader--brand"></div>
		</span>
	</div>
</div>
<div class="m-grid m-grid--hor m-grid--root m-page">
	@include('admin.layouts.header')
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
		@include('admin.layouts.sidebar')
		@yield('content')
	</div>
	@include('admin.layouts.footer')
</div>
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
@include('admin.layouts.js')
@yield('js')
</body>
</html>