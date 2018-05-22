@extends('app')

@section('titlePage', 'Venta y renta de maquinaria. Contamos con el inventario más completo en equipo de maquinaria y trituración. Excavadora 320C, Retroexcavadora 580 super m, Vibrocompactador SD100, Camión articulado cat 740, Tractor sobre orugas d155ax.')
@section('description', 'Venta y renta de maquinaria. Contamos con el inventario más completo en equipo de maquinaria y trituración. ')
@section('keywords', ', Excavadora 320C, Retroexcavadora 580 super m, Vibrocompactador SD100, Camión articulado cat 740, Tractor sobre orugas d155ax')

@section('content')
	<div class="inner-banner venta-renta"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Venta y renta de maquinaria</h1>
		</div>
		<div class="row">
			<p>Contamos con el inventario más completo en equipo de maquinaria y trituración tanto para construcción como minería a cielo abierto. Nuestro catálogo de maquinaria pesada incluye trituradoras secundarias, vibrocompactadores, excavadoras, retroexcavadora, camiones articulados, conos primarios, conos secundarios y plantas de luz de las mejores marcas como CASE, Caterpillar, CEC, GATOR, Komatsu, Metso, Powerscreen.</p>
			<p>Tenemos la capacidad para atender las necesidades más exigentes dentro de la República Mexicana. No importa el tamaño o la complejidad del proyecto.</p>
		</div>
	</div>

	<div class="container m-top-40 m-bottom-40 refas-container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href={{ url('maquinaria/excavadora-320c') }}><img src="images/maquinaria-excavadora-320-CL-thumbnail.jpg" alt="maquinaria excavadora 320 CL thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/excavadora-320c') }}">Excavadora 320C</a></p>
					<p class="desc"><a href="{{ url('maquinaria/excavadora-320c') }}">CAT</a></p>
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
				<div class="photo"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}"><img src="images/maquinaria-vibrocompactador-ingersold-rand-thumb.jpg" alt="maquinaria vibrocompactador ingersold rand thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}">vibrocompactador SD100</a></p>
					<p class="desc"><a href="{{ url('maquinaria/vibrocompactador-ingersol-rand') }}">ingersol rand</a></p>
				</div>
			</div>
		</div>

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
				<div class="photo"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}"><img src="images/maquinaria-cono-secundario-sobre-orugas-hp-300-thumbnail.jpg" alt="maquinaria cono secundario metso sobre orugas thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}">Cono secundario sobre orugas HP 300</a></p>
					<p class="desc"><a href="{{ url('maquinaria/cono-secundario-metso-sobre-orugas') }}">METSO</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/cono-secundario-semifijo-414') }}"><img src="images/maquinaria-cono-secundario-semifijo-4-1-4-thumb.jpg" alt="maquinaria cono secundario semifijo 4 1 4 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/cono-secundario-semifijo-414') }}">Cono secundario semifijo 4 1/4'</a></p>
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
					<p class="title"><a href="{{ url('maquinaria/excavadora-dossan-340') }}">Excavadora 340LX</a></p>
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
				<div class="photo"><a href="{{ url('maquinaria/generador-himoinsa-245-kva') }}"><img src="images/maquinaria-generador-himmoinsa-245-kva-thumb.jpg" alt="maquinaria generador himoinsa 245 kva thumb"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/generador-himoinsa-245-kva') }}">Generador 245 kva</a></p>
					<p class="desc"><a href="{{ url('maquinaria/generador-himoinsa-245-kva') }}">Himoinsa</a></p>
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


		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/maquinaria-cargador-frontal-cat-950g') }}"><img src="images/maquinaria-cargador-frontal-cat-950g-thumbnail.png" alt="maquinaria cargador frontal cat 950g thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/maquinaria-cargador-frontal-cat-950g') }}">Cargador frontal 950g</a></p>
					<p class="desc"><a href="{{ url('maquinaria/maquinaria-cargador-frontal-cat-950g') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/maquinaria-tractor-cat-d7h') }}"><img src="images/maquinaria-tractor-cat-d7h-thumbnail_.png" alt="maquinaria tractor cat d7h thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/maquinaria-tractor-cat-d7h') }}">Tractor d7h</a></p>
					<p class="desc"><a href="{{ url('maquinaria/maquinaria-tractor-cat-d7h') }}">CAT</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/maquinaria-trituradora-metso-lt120') }}"><img src="images/maquinaria-trituradora-metso-lt120-thumbnail.png" alt="maquinaria trituradora metso lt120 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/maquinaria-trituradora-metso-lt120') }}">trituradora primaria sobre orugas lt120</a></p>
					<p class="desc"><a href="{{ url('maquinaria/maquinaria-trituradora-metso-lt120') }}">metso</a></p>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/trituradora-impacto-1214-hongXing') }}"><img src="images/maquinaria-trituradora-impacto-1214-hongXing-thumbnail.jpg" alt="trituradora impacto 1214 hongXing thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/trituradora-impacto-1214-hongXing') }}">TRITURADORA IMPACTO 1214</a></p>
					<p class="desc"><a href="{{ url('maquinaria/trituradora-impacto-1214-hongXing') }}">HONGXING</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/trituradora-primaria-24x36-gator') }}"><img src="images/maquinaria__trituradora-primaria-24x36-gator-thumbnail.jpg" alt="maquinaria trituradora primaria 24x36 gator thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/trituradora-primaria-24x36-gator') }}">TRITURADORA PRIMARIA 24X36</a></p>
					<p class="desc"><a href="{{ url('maquinaria/trituradora-primaria-24x36-gator') }}">GATOR</a></p>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('maquinaria/trituradora-secundaria-cono-3-1-4-sec') }}"><img src="images/maquinaria-trituradora-primaria-24x36-gator-thumbnail.jpg" alt="maquinaria trituradora secundaria cono 3 1/4 sec thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('maquinaria/trituradora-secundaria-cono-3-1-4-sec') }}">trituradora secundaria cono 3 1/4'</a></p>
					<p class="desc"><a href="{{ url('maquinaria/trituradora-secundaria-cono-3-1-4-sec') }}">CEC</a></p>
				</div>
			</div>
		</div>

		<div class="row" style="display: none;">
			<a href="#" class="button-colors centered">Mostrar más</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@include('partials.contact-form')
		</div>
	</div>

@stop

@section('validator-script')
	<script>
		$(function(){

			var formSettings = {
				singleError : function($field, rules){ 
					$field.closest('.form-group').removeClass('valid').addClass('error');
					$('.text-danger').fadeIn();
				},
				singleSuccess : function($field, rules){ 
					$field.closest('.form-group').removeClass('error').addClass('valid');
					$('.text-danger').fadeOut();
				},
				overallSuccess : function(){
					var form    	= $('#contactFormMaquinaria'),
						nombre		= form.find( "input[name='nombre']").val(),
						email		= form.find( "input[name='email']").val(),
						telefono	= form.find( "input[name='telefono']").val(),
						comentario	= form.find( "textarea[name='comentario']").val(),
						_token		= form.find( "input[name='_token']").val(),
						action		= form.attr( "action"),
						url			= action;

					var posting = $.post(
						url, { nombre: nombre, telefono: telefono, email: email, _token: _token, comentario: comentario }
					);
					posting.done(function( data ){

						$('#contactFormMaquinaria')[0].reset();
						$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
						
						var google_conversion_id = 823452875;
						var google_conversion_label = "1f_hCN7qx4ABEMvJ04gD";
						var google_remarketing_only = false;

						var oldDocumentWrite = document.write 

						document.write = function(node){
						    $('body').append(node)
						}

						$.getScript( 'http://www.googleadservices.com/pagead/conversion.js', function() {
						    setTimeout(function() {
						        document.write = oldDocumentWrite
						    }, 100)
						});

						console.log('email sent! \n' + data );
					});
				},
				overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
					autoDetect : true, debug : true
				};
			var $validate = $('#contactFormMaquinaria').validate(formSettings).data('validate');
		});
	</script>
@stop