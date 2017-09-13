<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','dafault')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
@include('admin.partials.nav');
<section>
	@include('flash::message')
	@include('admin.partials.mensajes');
	@yield('content')
</section>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/chosen/chosen.jquery.min.js')}}"></script>
<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js')}}"></script>
@yield('js')
<script></script>
</body>
</html>