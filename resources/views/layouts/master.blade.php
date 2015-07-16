<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adisystems Limited</title>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/webicons.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

	{{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="">
		@if(Session::has('message'))
			{!! Session::get('message') !!}
		@endif

		@yield('content') 

	     <!-- FOOTER --> 
	    @include('layouts.footer')
	</div>
	
	<!-- Scripts -->
	
	<script src="{{ asset('/js/jquery.js')}}"></script>
	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('/js/scripts.js')}}"></script>
</body>
</html>
