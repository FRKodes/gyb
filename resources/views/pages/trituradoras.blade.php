@extends('app')

@section('titlePage', 'Venta de maquinaria para trituración. Trituradoras de piedra a la venta en México, el inventario más completo en equipo de trituración. Cribas, conos par atrituración, chancadoras, trituradoras de impacto, trituradoras de muelas. Maquinaria de trituración para entrega inmediata.')
@section('description', 'Venta trituradoras de piedra. Inventario para entrega inmediata en máquinas de trituración. Chancadoras, Cribas.')
@section('keywords', ', trituradora de piedra, trituradora de piedra precio, chancadora, Cribas, trituración de piedra, trituradoras de pieda a la venta, trituradoras en venta México')

@section('content')
	<div class="inner-banner venta-renta"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Venta de maquinaria para trituración</h1>
		</div>
		<div class="row">
			<p>Contamos con el inventario más completo en equipo para trituración, trituradoras de piedra de impacto, trituradoras de piedra de impacto vertical, trituradoras de piedra de impacto horizontal, trituradoras de impacto, trituradoras con sistema hidráulico, conos de cilindro simple, VSIs de impacto vertical y cribas vibratorias.</p>

			<p>Inventario listo para entrega inmediata, enviamos a todo méxico.</p>
		</div>
	</div>

	<div class="container m-top-40 m-bottom-40 refas-container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo">
					<a href="{{ url('venta-maquinaria-trituracion/primario-de-hidraulico-de-quijadas') }}" >
						<img src="images/venta-maquianaria-trituracion-hydraulic-jaw-crusher-395x216.png" alt="venta maquianaria trituracion hydraulic jaw crusher thumbnail">
					</a>
				</div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/primario-de-hidraulico-de-quijadas') }}">PRIMARIO DE HIDRÁULICO DE QUIJADAS</a></p>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/trituradora-de-cono-compuesto') }}"><img src="images/venta-maquianaria-trituracion-compound-cone-crusher-01-395x216.png" alt="venta maquianaria trituracion compound cone crusher thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/trituradora-de-cono-compuesto') }}">TRITURADORA DE CONO COMPUESTO</a></p>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/trituradora-de-impacto-con-sistema-hidraulico') }}"><img src="images/venta-maquianaria-trituracion-hydraulic-impactor-395x216.png" alt="venta maquianaria trituracion hydraulic impactor thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/trituradora-de-impacto-con-sistema-hidraulico') }}">TRITURADORA DE IMPACTO CON SISTEMA HIDRÁULICO</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/cono-de-cilindro-simple') }}"><img src="images/venta-maquianaria-trituracion-single-cylinder-cone-crusher-0-395x216.jpeg" alt="venta maquianaria trituracion single cylinder cone crusher thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/cono-de-cilindro-simple') }}">CONO DE CILINDRO SIMPLE</a></p>
				</div>
			</div>
		
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/vsi-de-impacto-vertical') }}"><img src="images/venta-maquianaria-trituracion-pcl-vertical-shaft-impact-crusher-395x216.png" alt="venta maquianaria trituracion pcl vertical shaft impact crusher thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/vsi-de-impacto-vertical') }}">VSI DE IMPACTO VERTICAL</a></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 refa-item">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/criba-vibratoria') }}"><img src="images/venta-maquianaria-trituracion-vibrating-screen-395x216.png" alt="venta maquianaria trituracion vibrating screen thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/criba-vibratoria') }}">CRIBA VIBRATORIA</a></p>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 refa-item" style="display: none;">
				<div class="photo"><a href="{{ url('venta-maquinaria-trituracion/alimentador-vibratorio') }}"><img src="images/venta-maquianaria-trituracion-gzd-500-395x216.png" alt="venta maquianaria trituracion gzd 500 thumbnail"></a></div>
				<div class="description">
					<p class="title"><a href="{{ url('venta-maquinaria-trituracion/alimentador-vibratorio') }}">ALIMENTADOR VIBRATORIO</a></p>
				</div>
			</div>
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
						
						var google_conversion_id = 802793665;
						var google_conversion_label = "yP4qCLyDroMBEMHR5v4C";
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