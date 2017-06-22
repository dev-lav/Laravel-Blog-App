<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials._head')
	</head>
	<body>
		<div class="jumbotron-fluid jumbo text-center" id="jumbo_header">
		@include('partials._topbar')
		@yield('jumbotron_writeup')
		<img src="/images/down_arrow.png" class="" height="20%" id="down">
		</div>
		@include('partials._navbar')
		<div class="container">
			@include('partials._messages')
			@yield('content')
		</div>
		@include('partials._footer')
		@include('partials._javascript')
	</body>
</html>