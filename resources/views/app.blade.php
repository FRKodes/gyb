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
		{{-- <a target="_blank" class="whatsapp" href="https://api.whatsapp.com/api/send?phone=+5213332015517&text=Hola%20quiero%20info">
			<img src="/images/whatsapp.png" alt="Mándanos un mensaje por Whatsapp">
		</a> --}}
		<script src="js/app.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/custom.js?v=1.0"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"></script>
		@yield('script-conversion')
	</body>
</html>
