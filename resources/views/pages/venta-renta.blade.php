@extends('app')

@section('content')
	<div class="inner-banner venta-renta"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Venta y renta de maquinaria</h1>
		</div>
		<div class="row">
			<p>Contamos con el inventario más completo en equipo de maquinaria y trituración.</p>
		</div>
	</div>

	<div class="container m-top-40 m-bottom-40 refas-container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria01.jpg" alt="refacción-01"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria02.jpg" alt="refacción-02"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria03.jpg" alt="refacción-03"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria02.jpg" alt="refacción-02"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria03.jpg" alt="refacción-03"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('piston-falange-320-sr') }}"><img src="images/maquinaria01.jpg" alt="refacción-01"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('piston-falange-320-sr') }}">Lorem ipsum dolor sit amet</a></p>
					<p class="desc"><a href="{{ url('piston-falange-320-sr') }}">Consectetur adipisicing elit</a></p>
				</div>
			</div>
		</div>



		<div class="row">
			<a href="#" class="button-colors centered">Mostrar más</a>
		</div>
	</div>

@stop