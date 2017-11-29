@extends('app')

@section('content')
	<div class="inner-banner refacciones"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Venta de refacciones</h1>
		</div>
		<div class="row">
			<p>Contamos con el inventario más completo de refacciones en equipo de maquinaria y trituración.</p>
		</div>
	</div>

	<div class="container m-top-40 m-bottom-40 refas-container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/gator-primario-24x36') }}"><img src="images/refaccion-gator-primary-24x36-thumbnail.jpg" alt="refaccion gator primary 24x36 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/gator-primario-24x36') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/gator-primario-24x36') }}">GATOR PRIMARIO 24X36</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}"><img src="images/refaccion-metso-HP200-cone-thumbnail.jpg" alt="refaccion metso HP200 cone thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">MANTLE Y BOWL LINER</a></p>
					<p class="desc"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">METSO CONO HP200</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/mantle-bowl-liner-hp300') }}"><img src="images/refaccion-metso-HP300-cone-thumbnail.jpg" alt="refaccion metso HP300 cone thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/mantle-bowl-liner-hp300') }}">MANTLE Y BOWL LINER</a></p>
					<p class="desc"><a href="{{ url('refaccion/mantle-bowl-liner-hp300') }}">METSO CONO HP300</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/metso-primario-c106') }}"><img src="images/refaccion-metso-primary-c106-thumbnail.jpg" alt="refaccion metso primary c106 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/metso-primario-c106') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/metso-primario-c106') }}">METSO PRIMARIO C106</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/sandvik-primario-1208') }}"><img src="images/refaccion-sandvick-primary-thumbnail.jpg" alt="refaccion sandvick primary thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/sandvik-primario-1208') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/sandvik-primario-1208') }}">SANDVIK PRIMARIO 1208</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/gator-impacto-1013') }}"><img src="images/refaccion-gator-impact-1013-thumbnail.jpg" alt="refaccion gator impact 1013 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/gator-impacto-1013') }}">MARTILLO /LISTON / BLOW BAR</a></p>
					<p class="desc"><a href="{{ url('refaccion/gator-impacto-1013') }}">GATOR IMPACTO 1013</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/gator-impacto-1315') }}"><img src="images/refaccion-gator-impact-1315-thumbnail.jpg" alt="refaccion gator impact 1315 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/gator-impacto-1315') }}">MARTILLO /LISTON / BLOW BAR</a></p>
					<p class="desc"><a href="{{ url('refaccion/gator-impacto-1315') }}">GATOR IMPACTO 1315</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/metso-impacto-lt1213') }}"><img src="images/refaccion-metso-impact-lt1213-1920-thumbnail.jpg" alt="refaccion metso impact lt1213 1920 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/metso-impacto-lt1213') }}">MARTILLO /LISTON / BLOW BAR</a></p>
					<p class="desc"><a href="{{ url('refaccion/metso-impacto-lt1213') }}">METSO IMPACTO LT1213</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/metso-primario-lt120') }}"><img src="images/refaccion-metso-primary-lt120-thumbnail.jpg" alt="refaccion metso primary lt120 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/metso-primario-lt120') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/metso-primario-lt120') }}">METSO PRIMARIO LT120</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/gator-rodillos-varias-medidas') }}"><img src="images/refaccion-rodillos-thmbnails.jpg" alt="refaccion rodillos thmbnails"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/gator-rodillos-varias-medidas') }}">RODILLOS DE DIFERENTES MEDIDAS DE LARGO Y 4-1/2" DE DIAMETRO</a></p>
					<p class="desc"><a href="{{ url('refaccion/gator-rodillos-varias-medidas') }}">GATOR RODILLOS</a></p>
				</div>
			</div>
		</div>


		<div class="row" style="display: none;">
			<a href="#" class="button-colors centered">Mostrar más</a>
		</div>
	</div>

@stop