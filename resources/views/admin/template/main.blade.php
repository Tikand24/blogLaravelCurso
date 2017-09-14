<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('plugins/plantilla/') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('plugins/plantilla/') }}/build/css/custom.min.css" rel="stylesheet">
  </head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title','dafault')</title>
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
	@yield('css')
@include('admin.partials.nav');
    <div class="right_col" role="main">
	@include('flash::message')
	@include('admin.partials.mensajes');
	@yield('content')
</div>
</div>
</div>

    <script src="{{ asset('plugins/plantilla/') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('plugins/plantilla/') }}/vendors/moment/min/moment.min.js"></script>
    <script src="{{ asset('plugins/plantilla/') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->

<script src="{{ asset('plugins/chosen/chosen.jquery.min.js')}}"></script>
<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js')}}"></script>
    <script src="{{ asset('plugins/plantilla/') }}/build/js/custom.min.js"></script>
@yield('js')
<script></script>
</body>
</html>