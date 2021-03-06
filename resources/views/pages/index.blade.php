@extends('app')

@section('titlePage', ' Renta y venta de maquinaria pesada. Venta de refacciones para maquinaria pesada.')
@section('description', 'Renta y venta de maquinaria pesada. Venta de refacciones para maquinaria pesada. Inventario listo para entrega. Contamos con el inventario más completo de refacciones en equipo de maquinaria y trituración.')
@section('keywords', ', refacciones maquinaria')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="main-banners-container">
				<div class="item one">
					<div class="info">
						<h2 class="banner-title passion">Inventario</h2>
						<h3 class="azul-01 mayus">Listo para entrega</h3>
						<p>Contamos con el inventario más completo de refacciones en equipo de maquinaria y trituración</p>
					</div>
					<div class="photo"><img src="images/banner-trituradora.png" alt="banner trituradora"></div>
				</div>				
			</div>
		</div>
	</div>

	<div class="container m-top-40 refas-container">
		<div class="row">
			<div class="refas-home">
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/reductor-25-a-1') }}"><img src="images/refaccion-moto-reductor.jpg" alt="refacción refaccion moto reductor"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/reductor-25-a-1') }}">MOTO REDUCTOR T-4 25 A 1</a></p>
							<p class="desc"><a href="{{ url('refaccion/reductor-25-a-1') }}">&nbsp;</a></p>
						</div>
					</div>
				</div>
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/gator-impacto-1315') }}"><img src="images/refaccion-gator-impact-1315-thumbnail.jpg" alt="refacción gator impact 1315 thumbnail"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/gator-impacto-1315') }}">MARTILLO /LISTON / BLOW BAR</a></p>
							<p class="desc"><a href="{{ url('refaccion/gator-impacto-1315') }}">IMPACTO GATOR 1315</a></p>
						</div>
					</div>
				</div>
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}"><img src="images/refaccion-hp200-cone-thumbnail.jpg" alt="refacción HP200 cone thumbnail"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">MANTLE Y BOWL LINER</a></p>
							<p class="desc"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">CONO HP200</a></p>
						</div>
					</div>
				</div>
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/gator-primario-24x36') }}"><img src="images/refaccion-gator-primary-24x36-thumbnail.jpg" alt="refacción gator primary thumbnail"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/gator-primario-24x36') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
							<p class="desc"><a href="{{ url('refaccion/gator-primario-24x36') }}">PRIMARIO GATOR 24X36</a></p>
						</div>
					</div>
				</div>
				
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/grapa-banda-transportadora') }}"><img src="images/refaccion-grapa-banda-transportadora-thumbnail.jpg" alt="refacción grapa banda transportadora"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/grapa-banda-transportadora') }}">GRAPAS DE 1 1/2" y 2"</a></p>
							<p class="desc"><a href="{{ url('refaccion/grapa-banda-transportadora') }}">&nbsp;</a></p>
						</div>
					</div>
				</div>
				
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/sandvik-primario-1208') }}"><img src="images/refaccion-sandvick-primary-thumbnail.jpg" alt="refaccion sandvick primary thumbnail"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/sandvik-primario-1208') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
							<p class="desc"><a href="{{ url('refaccion/sandvik-primario-1208') }}">PRIMARIO SANDVIK 1208</a></p>
						</div>
					</div>
				</div>
				<div class="refa-item">
					<div class="inner">
						<div class="photo"><a href="{{ url('refaccion/gator-primario-24x36') }}"><img src="images/refaccion-gator-primary-24x36-thumbnail.jpg" alt="refacción gator primary thumbnail"></a></div>
						<div class="description">
							<p class="title"><a href="{{ url('refaccion/gator-primario-24x36') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
							<p class="desc"><a href="{{ url('refaccion/gator-primario-24x36') }}">PRIMARIO GATOR 24X36</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<a href="{{ url('venta-de-refacciones') }}" class="button-colors centered">Conoce nuestro inventario</a>
		</div>
	</div>


	<div class="back-black p-bottom-40 p-top-40 m-top-40 hard-work-container">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 worker-phrase-container">
					<div class="worker">
						<div class="guy"><img src="images/obrero.png" alt="Obreo trabajo duro"></div>
					</div>
					<div class="hard-work big">
						<h2 class="title passion">Trabajo duro</h2>
						<p><strong>Renta de maquinaria</strong></p>
						<p class="white">Contamos con el inventario más completo en equipo y maquinaria para minería y trituración.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container maquinas">
			<div class="row">
				
				<div class="col-xs-12 hard-work">
					<h2 class="title passion">Trabajo duro</h2>
					<p><strong>Renta de maquinaria</strong></p>
					<p class="white">Contamos con el inventario más completo en equipo y maquinaria para minería y trituración.</p>
				</div>
				

				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href={{ url('maquinaria/excavadora-320c') }}><img src="images/maquinaria-excavadora-320-CL-thumbnail.jpg" alt="maquinaria excavadora 320 CL thumbnail"></a></div>
					<div class="description">
						<p class="title"><a href="{{ url('maquinaria/excavadora-320c') }}">Excavadora R320C</a></p>
						<p class="desc"><a href="{{ url('maquinaria/excavadora-320c') }}">CAT</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}"><img src="images/maquinaria-vibrocompactador-ingersold-rand-thumb.jpg" alt="maquinaria vibrocompactador ingersold rand thumbnail"></a></div>
					<div class="description">
						<p class="title"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}">vibrocompactador</a></p>
						<p class="desc"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}">ingersol rand</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}"><img src="images/maquinaria-retroexcavadora-super-m-thumbnail.jpg" alt="maquinaria retroexcavadora super m thumbnail"></a></div>
					<div class="description">
						<p class="title"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}">Retroexcavadora super m</a></p>
						<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}">CASE</a></p>
					</div>
				</div>
			</div>

			<div class="row">
				<a href="{{ url('venta-y-renta-de-maquinaria') }}" class="button-colors centered">Conoce nuestro inventario</a>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="banner-inventario m-top-40 m-bottom-40"><img class="img-cien" src="images/banner-aux-home.jpg" alt="banner aux home"></div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-xs-12 brands-container">
			<div class="brand-item"><img class="" src="images/logo-case-gyb-marcas.png" alt="logo case gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-caterpillar-gyb-marcas.png" alt="logo caterpillar gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-cec-gyb-marcas.png" alt="logo cec gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-gator-gyb-marcas.png" alt="logo gator gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-komatsu-gyb-marcas.png" alt="logo komatsu gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-powerscreen-gyb-marcas.png" alt="logo powerscreen gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-terex-gyb-marcas.png" alt="logo terex gyb marcas"></div>
		</div>
	</div>

@stop