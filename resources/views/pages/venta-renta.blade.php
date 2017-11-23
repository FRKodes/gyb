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
				<div class="photo"><a href={{ url('maquinaria/excavadora-210-LC') }}><img src="images/maquinaria-excavadora-210-LC-thumbnail.jpg" alt="excavadora 210 LC thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-210-LC') }}">Excavadora R210LC-7</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-210-LC') }}">KOMATSU</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href={{ url('maquinaria/excavadora-320-c') }}><img src="images/maquinaria-excavadora-320-c-thumbnail.jpg" alt="maquinaria excavadora 320 c thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-320-c') }}">Excavadora 320 C</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-320-c') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href={{ url('maquinaria/excavadora-320-CL') }}><img src="images/maquinaria-excavadora-320-CL-thumbnail.jpg" alt="maquinaria excavadora 320 CL thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-320-CL') }}">Excavadora R320LC-7</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-320-CL') }}">CAT</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-350-lc') }}"><img src="images/maquinaria-excavadora-350-lc-thumbnail.jpg" alt="maquinaria excavadora 350 lc thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-350-lc') }}">Excavadora-350-lc</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-350-lc') }}">KOMATSU</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/motoconformadora-140-h') }}"><img src="images/maquinaria-motoconformadora-140-h-thumbnail.jpg" alt="maquinaria motoconformadora 140 h thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/motoconformadora-140-h') }}">Motoconformadora 140 h</a></p>
					<p class="desc"><a href="{{ url('maquinaria/motoconformadora-140-h') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/motoconformadora-845-b') }}"><img src="images/maquinaria-motoconformadora-845-b-thumbnail.jpg" alt="maquinaria motoconformadora 845 b thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/motoconformadora-845-b') }}">Motoconformadora 845 b</a></p>
					<p class="desc"><a href="{{ url('maquinaria/motoconformadora-845-b') }}">CASE</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-416-e') }}"><img src="images/maquinaria-retroexcavadora-416-e-thumbnail.jpg" alt="maquinaria retroexcavadora 416 e thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-416-e') }}">Excavadora 416 e</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-416-e') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-580-m') }}"><img src="images/maquinaria-retroexcavadora-580-m-thumbnail.jpg" alt="maquinaria retroexcavadora 580 m thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-580-m') }}">Retroexcavadora 580 m</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-580-m') }}">CASE</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-super-n') }}"><img src="images/maquinaria-retroexcavadora-super-n-thumbnail.jpg" alt="maquinaria retroexcavadora super n thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-super-n') }}">Retroexcavadora super n</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-super-n') }}">CASE</a></p>
				</div>
			</div>
		</div>



		<div class="row">
			<a href="#" class="button-colors centered">Mostrar más</a>
		</div>
	</div>

@stop