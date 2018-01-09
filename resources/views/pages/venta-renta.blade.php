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
				<div class="photo"><a href={{ url('maquinaria/excavadora-320-CL') }}><img src="images/maquinaria-excavadora-320-CL-thumbnail.jpg" alt="maquinaria excavadora 320 CL thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-320-CL') }}">Excavadora R320LC-7</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-320-CL') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}"><img src="images/maquinaria-retroexcavadora-super-m-thumbnail.jpg" alt="maquinaria retroexcavadora super m thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}">Retroexcavadora 580 super m</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-super-m') }}">CASE</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}"><img src="images/maquinaria-vibrocompactador-ingersold-rand-thumb.jpg" alt="maquinaria vibrocompactador ingersold rand thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}">vibrocompactador SD100</a></p>
					<p class="desc"><a href="{{ url('maquinaria/vibrocompactador-ingersold-rand') }}">ingersold rand</a></p>
				</div>
			</div>
		</div>

		{{-- <div class="row">
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
		</div> --}}

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/camion-articulado-cat-740') }}"><img src="images/maquinaria-camion-articulado-cat-740-thumb.jpg" alt="maquinaria camion articulado cat 740 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/camion-articulado-cat-740') }}">Camión articulado cat 740</a></p>
					<p class="desc"><a href="{{ url('maquinaria/camion-articulado-cat-740') }}">Cat</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/camion-pipa-continental-20k-litros') }}"><img src="images/maquinaria-camion-pipa-continental-20k-litros-thumb.jpg" alt="maquinaria camion pipa continental 20k litros thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/camion-pipa-continental-20k-litros') }}">Camión pipa continental 20k litros</a></p>
					<p class="desc"><a href="{{ url('maquinaria/camion-pipa-continental-20k-litros') }}">.</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/camion-volteo-14mts') }}"><img src="images/maquinaria-camion-volteo-14mts-thumb.jpg" alt="maquinaria camion volteo 14mts thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/camion-volteo-14mts') }}">Camión volteo 14mts</a></p>
					<p class="desc"><a href="{{ url('maquinaria/camion-volteo-14mts') }}">.</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cargador-frontal-case-721C') }}"><img src="images/maquinaria-cargador-frontal-case-721C-thumb.jpg" alt="maquinaria cargador frontal case 721C thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cargador-frontal-case-721C') }}">Cargador frontal 721C</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cargador-frontal-case-721C') }}">Case</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cargador-frontal-case-721e') }}"><img src="images/maquinaria-cargador-frontal-case-721e-thumb.jpg" alt="maquinaria-cargador-frontal-case-721e-thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cargador-frontal-case-721e') }}">Cargador frontal 721e</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cargador-frontal-case-721e') }}">Case</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cargador-frontal-cat-966') }}"><img src="images/maquinaria-cargador-frontal-cat-966-thumb.jpg" alt="maquinaria cargador frontal cat 966 thummnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cargador-frontal-cat-966') }}">Cargador frontal 966 F</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cargador-frontal-cat-966') }}">CAT</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}"><img src="images/maquinaria-cono-secundario-metso-sobre-orugas-thumb.jpg" alt="maquinaria cono secundario metso sobre orugas thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}">Cono secundario sobre orugas HP 300</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}">METSO</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cono-secundario-semifijo-414') }}"><img src="images/maquinaria-cono-secundario-semifijo-4-1-4-thumb.jpg" alt="maquinaria cono secundario semifijo 4 1 4 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cono-secundario-semifijo-414') }}">Cono secundario semifijo 4 1/4</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cono-secundario-semifijo-414') }}">.</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-hyundai') }}"><img src="images/maquinaria-excavadora-hyundai-thumb.jpg" alt="maquinaria-excavadora-hyundai-thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-hyundai') }}">Excavadora 210 LC7</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-hyundai') }}">Hyundai</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-cat-320c') }}"><img src="images/maquinaria-excavadora-cat-320c-thumb.jpg" alt="maquinaria excavadora cat 320c thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-cat-320c') }}">Excavadora 320 clu</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-cat-320c') }}">cat</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-doosan-225lx') }}"><img src="images/maquinaria-excavadora-doosan-225lx-thumb.jpg" alt="maquinaria excavadora doosan 225lx thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-doosan-225lx') }}">Excavadora 225lx</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-doosan-225lx') }}">Doosan</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-dossan-340') }}"><img src="images/maquinaria-excavadora-dossan-340-thumb.jpg" alt="maquinaria excavadora dossan 340 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-dossan-340') }}">Excavadora 340</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-dossan-340') }}">Doosan</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-komatsu-pc210') }}"><img src="images/maquinaria-excavadora-komatsu-pc210-thumb.jpg" alt="maquinaria excavadora komatsu pc210 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-komatsu-pc210') }}">Excavadora pc210</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-komatsu-pc210') }}">komatsu</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/excavadora-komatsu-pc350') }}"><img src="images/maquinaria-excavadora-komatsu-pc350-thumb.jpg" alt="maquinaria excavadora komatsu pc350 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-komatsu-pc350') }}">Excavadora pc350</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-komatsu-pc350') }}">komatsu</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/generador-cummins-125-kva') }}"><img src="images/maquinaria-generador-cummins-125-kva-thumb.jpg" alt="maquinaria-generador cummins 125 kva thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/generador-cummins-125-kva') }}">Generador 125 kva</a></p>
					<p class="desc"><a href="{{ url('maquinaria/generador-cummins-125-kva') }}">cummins</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/generador-himmoinsa-245-kva') }}"><img src="images/maquinaria-generador-himmoinsa-245-kva-thumb.jpg" alt="maquinaria generador himmoinsa 245 kva thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/generador-himmoinsa-245-kva') }}">Generador 245 kva</a></p>
					<p class="desc"><a href="{{ url('maquinaria/generador-himmoinsa-245-kva') }}">Himmoinsa</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/motoconformadora-case-845') }}"><img src="images/maquinaria-motoconformadora-case-845-thumb.jpg" alt="maquinaria motoconformadora case 845 thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/motoconformadora-case-845') }}">Motoconformadora 845</a></p>
					<p class="desc"><a href="{{ url('maquinaria/motoconformadora-case-845') }}">Case</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/motoconformadora-cat-140H') }}"><img src="images/maquinaria-motoconformadora-cat-140H-thumb.jpg" alt="maquinaria motoconformadora cat 140H thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/motoconformadora-cat-140H') }}">Motoconformadora 140H</a></p>
					<p class="desc"><a href="{{ url('maquinaria/motoconformadora-cat-140H') }}">Cat</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/motoconformadora-champion-730a') }}"><img src="images/maquinaria-motoconformadora-champion-730a-thumb.jpg" alt="maquinaria motoconformadora champion 730a thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/motoconformadora-champion-730a') }}">Motoconformadora 730a</a></p>
					<p class="desc"><a href="{{ url('maquinaria/motoconformadora-champion-730a') }}">Champion</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/planta-luz-yanmar') }}"><img src="images/maquinaria-planta-luz-yanmar-thumb.jpg" alt="maquinaria planta luz yanmar thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/planta-luz-yanmar') }}">Planta luz</a></p>
					<p class="desc"><a href="{{ url('maquinaria/planta-luz-yanmar') }}">Yanmar</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-case-580m') }}"><img src="images/maquinaria-retroexcavadora-case-580m-thumb.jpg" alt="maquinaria retroexcavadora caser 580m thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-case-580m') }}">Retroexcavadora 580m</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-case-580m') }}">Case</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/retroexcavadora-cat-416e') }}"><img src="images/maquinaria-retroexcavadora-cat-416e-thumb.jpg" alt="maquinaria retroexcavadora cat 416e"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/retroexcavadora-cat-416e') }}">Retroexcavadora 416e</a></p>
					<p class="desc"><a href="{{ url('maquinaria/retroexcavadora-cat-416e') }}">Cat</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/tractor-sobre-orugas-cat-dr8') }}"><img src="images/maquinaria-tractor-sobre-orugas-cat-dr8-thumb.jpg" alt="maquinaria tractor sobre orugas cat dr8 thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/tractor-sobre-orugas-cat-dr8') }}">Tractor sobre orugas dr8</a></p>
					<p class="desc"><a href="{{ url('maquinaria/tractor-sobre-orugas-cat-dr8') }}">Cat</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/tractor-sobre-orugas-komatsu-d155ax') }}"><img src="images/maquinaria-tractor-sobre-orugas-komatsu-d155ax-thumb.jpg" alt="maquinaria tractor sobre orugas komatsu d155ax thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/tractor-sobre-orugas-komatsu-d155ax') }}">Tractor sobre orugas d155ax</a></p>
					<p class="desc"><a href="{{ url('maquinaria/tractor-sobre-orugas-komatsu-d155ax') }}">Komatsu</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/triturador-primario-gator-30x42') }}"><img src="images/maquinaria-triturador-primario-gator-30x42-thumb.jpg" alt="maquinaria-triturador-primario-gator-30x42-thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/triturador-primario-gator-30x42') }}">triturador primario 30x42</a></p>
					<p class="desc"><a href="{{ url('maquinaria/triturador-primario-gator-30x42') }}">Gator</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/trituradora-impacto-secundaria-gator') }}"><img src="images/maquinaria-trituradora-impacto-secundaria-gator-thumb.jpg" alt="maquinaria-trituradora-impacto-secundaria-gator-thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/trituradora-impacto-secundaria-gator') }}">Trituradora de impacto secundaria 1315</a></p>
					<p class="desc"><a href="{{ url('maquinaria/trituradora-impacto-secundaria-gator') }}">Gator</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/trituradora-secundaria-quijada-sfk') }}"><img src="images/maquinaria-trituradora-secundaria-quijada-sfk-thumb.jpg" alt="maquinaria-trituradora-secundaria-quijada-sfk-thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/trituradora-secundaria-quijada-sfk') }}">trituradora secundaria de quijada 10 x 47</a></p>
					<p class="desc"><a href="{{ url('maquinaria/trituradora-secundaria-quijada-sfk') }}">SFK</a></p>
				</div>
			</div>
		</div>


		<div class="row" style="display: none;">
			<a href="#" class="button-colors centered">Mostrar más</a>
		</div>
	</div>

@stop