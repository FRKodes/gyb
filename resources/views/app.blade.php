<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('partials.metas')
		@include('partials.styles')
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-14"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-84802922-14');
		</script>
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '642081772857836');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=642081772857836&ev=PageView&noscript=1"/></noscript>
	</head>
	<body>
		@include('partials.nav')

		<section>@yield('content') </section>

		<footer>
			@include('partials.footer')
		</footer>
		<a target="_blank" class="whatsapp" href="https://api.whatsapp.com/send?phone=523332015517">
			<img src="/images/whatsapp.png" alt="Mándanos un mensaje por Whatsapp">
		</a>
		<script src="js/app.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/custom.js?v=1.1"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"></script>
		@yield('validator-script')
		{{-- <div class="evento"></div> --}}
	</body>
</html>
