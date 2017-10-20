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
				<div class="photo"><a href="#"><img src="images/refac01.jpg" alt="refacción-01"></a></div>
				<div class="description">
					<p class="title">Lorem ipsum dolor sit amet</p>
					<p class="desc">Consectetur adipisicing elit</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="#"><img src="images/refac02.jpg" alt="refacción-02"></a></div>
				<div class="description">
					<p class="title">Lorem ipsum dolor sit amet</p>
					<p class="desc">Consectetur adipisicing elit</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="#"><img src="images/refac03.jpg" alt="refacción-03"></a></div>
				<div class="description">
					<p class="title">Lorem ipsum dolor sit amet</p>
					<p class="desc">Consectetur adipisicing elit</p>
				</div>
			</div>
		</div>

		<div class="row">
			<a href="#" class="button-colors centered">Conoce nuestro inventario</a>
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
						<p class="white">Contamos con el inventario más completo de refacciones en equipo de minería y trituración.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container maquinas">
			<div class="row">
				
				<div class="col-xs-12 hard-work">
					<h2 class="title passion">Trabajo duro</h2>
					<p><strong>Renta de maquinaria</strong></p>
					<p class="white">Contamos con el inventario más completo de refacciones en equipo de minería y trituración.</p>
				</div>

				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="#"><img src="images/maquinaria01.jpg" alt="maquinaria-01"></a></div>
					<div class="description">
						<p class="title">Lorem ipsum dolor sit amet</p>
						<p class="desc">Consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="#"><img src="images/maquinaria02.jpg" alt="maquinaria-02"></a></div>
					<div class="description">
						<p class="title">Lorem ipsum dolor sit amet</p>
						<p class="desc">Consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 refa-item">
					<div class="photo"><a href="#"><img src="images/maquinaria03.jpg" alt="maquinaria-03"></a></div>
					<div class="description">
						<p class="title">Lorem ipsum dolor sit amet</p>
						<p class="desc">Consectetur adipisicing elit</p>
					</div>
				</div>
			</div>

			<div class="row">
				<a href="#" class="button-colors centered">Conoce nuestro inventario</a>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="banner-inventario m-top-40 m-bottom-40"><img class="img-cien" src="images/banner-aux-home.jpg" alt="banner aux home"></div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 brands-container">
				{{-- <div class="brand-item"><img class="img-cien" src="images/brand-cat-logo.svg" alt="brand cat logo"></div> --}}
				<div class="brand-item"><img class="img-cien" src="images/brand-power-logo.svg" alt="brand power logo"></div>
			</div>
		</div>
	</div>

@stop