<!doctype html>	
	<html lang="en">

	<head>
		<meta charset="UTF-8">	
		<title> @yield('title') </title>
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
		@yield('styles')
	</head>

	<body>
		@include('partials.header')
		
		<div class="container">
			@yield('content')	
		</div>
		

		   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

		@yield('scripts')
	</body>
</html>