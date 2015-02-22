<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Imgr</title>
    <link rel="stylesheet" href="{{ Assets::asset('assets/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ Assets::asset('assets/css/styles.css') }}" />
    <script src="{{ Assets::asset('assets/js/vendor/modernizr.js') }}"></script>
</head>
<body>
	@include('layout.navigation')

	@yield('content')

	@include('layout.footer')
	<script src="{{ Assets::asset('assets/js/vendor/jquery.js') }}"></script>
	<script src="{{ Assets::asset('assets/js/foundation.min.js') }}"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>