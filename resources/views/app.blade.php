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
	</body>
</html>
