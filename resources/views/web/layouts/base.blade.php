<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	@include('web.layouts.meta')
  	@yield('meta')
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>@yield('title')</title>
	@include('web.layouts.css')
	@yield('css')
</head>
<body>
@yield('content')
@include('web.layouts.js')
@yield('js')
</body>
</html>