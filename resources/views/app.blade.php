<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('partials.metas')
		@include('partials.styles')
	</head>
	<body>
		@include('partials.nav')

		<section>@yield('content') </section>

		<footer>
			@include('partials.footer')
		</footer>
		<script src="js/app.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/custom.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"></script>
	</body>
</html>
