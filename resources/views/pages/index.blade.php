@extends('app')

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
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/gator-primario-24x36') }}"><img src="images/refaccion-gator-primary-24x36-thumbnail.jpg" alt="refacción gator primary thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/gator-primario-24x36') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/gator-primario-24x36') }}">GATOR PRIMARIO 24X36</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}"><img src="images/refaccion-metso-HP200-cone-thumbnail.jpg" alt="refacción metso HP200 cone thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">MANTLE Y BOWL LINER</a></p>
					<p class="desc"><a href="{{ url('refaccion/mantle-bowl-liner-hp200') }}">METSO CONO HP200</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('refaccion/sandvik-primario-1208') }}"><img src="images/refaccion-sandvick-primary-thumbnail.jpg" alt="refaccion sandvick primary thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('refaccion/sandvik-primario-1208') }}">MOBILE &amp; FIX JAW PLATE/MUELA FIJA Y MUELA MOVIL</a></p>
					<p class="desc"><a href="{{ url('refaccion/sandvik-primario-1208') }}">SANDVIK PRIMARIO 1208</a></p>
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
					<div class="photo"><a href={{ url('maquinaria/excavadora-320-CL') }}><img src="images/maquinaria-excavadora-320-CL-thumbnail.jpg" alt="maquinaria excavadora 320 CL thumbnail"></a></div>
					<div class="description">
						<p class="title"><a href="{{ url('maquinaria/excavadora-320-CL') }}">Excavadora R320LC-7</a></p>
						<p class="desc"><a href="{{ url('maquinaria/excavadora-320-CL') }}">CAT</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}"><img src="images/maquinaria-vibrocompactador-ingersold-rand-thumb.jpg" alt="maquinaria vibrocompactador ingersold rand thumbnail"></a></div>
					<div class="description">
						<p class="title"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}">vibrocompactador</a></p>
						<p class="desc"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}">ingersold rand</a></p>
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
			<div class="brand-item"><img class="" src="images/logo-metso-gyb-marcas.png" alt="logo metso gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-powerscreen-gyb-marcas.png" alt="logo powerscreen gyb marcas"></div>
			<div class="brand-item"><img class="" src="images/logo-terex-gyb-marcas.png" alt="logo terex gyb marcas"></div>
		</div>
	</div>

@stop