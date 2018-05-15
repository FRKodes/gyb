@extends('app')

@section('titlePage', 'Ponte en contacto con nosotros')
@section('description', 'Para nosotros, el contacto con nuestros clientes es muy importante, por lo tanto dejamos a continuación este formulario de contacto si necesitas comunicarte con nosotros.')
@section('keywords', ', contacto maquinaria')

@section('content')
	<div class="inner-banner contacto"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Ponte en contacto</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p>
				Para nosotros, el contacto con nuestros clientes es muy importante, por lo tanto dejamos a continuación este formulario de contacto si necesitas comunicarte con nosotros.
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 form">
				<form action="/sendmail" method="post" id="contactForm">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<input type="text" name="nombre" placeholder="*Nombre" class="form-control" data-validate="required">
					</div>
					<div class="form-group">
						<input type="text" name="ciudad" placeholder="Ciudad" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="telefono" placeholder="Teléfono" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="email" placeholder="*Correo electrónico" class="form-control" data-validate="required|email">
					</div>
					<div class="form-group">
						<textarea name="comentario" id="comentario" placeholder="*Comentario" class="form-control" cols="30" rows="10" data-validate="required"></textarea>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="button-colors" value="Enviar información">
					</div>
					<div class="sent_mail_alert text-center">¡GRACIAS!<br>Tu comentario se ha enviado con éxito. En breve nos pondremos en contacto contigo.</div>
				</form>
			</div>
			<div class="col-sm-6 info-map">
				<div class="info">
					<p class="block-title"><strong>Informes y ventas:</strong></p>
					<p class="light">
						Tel: <a href="tel:36010665">(33) 3601-0665</a>, <a href="tel:36010662">(33) 3601-0662</a> <br>
						Cel: <a href="tel:3332015517">333-201-55-17</a> <br>
						<a href="mailto:info@gyb.mx">info@gyb.mx</a> <br>
						San Ignacio #210 Colonia López Cotilla <br>
						Tlaquepaque, Jal. MX C.P. 45615 <br>
					</p>
				</div>
				<div class="mapa">
					<p class="block-title"><strong>Visítanos</strong></p>
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('validator-script')
	<script>
		/*validator*/
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
					var form    	= $('#contactForm'),
						nombre		= form.find( "input[name='nombre']").val(),
						email		= form.find( "input[name='email']").val(),
						ciudad		= form.find( "input[name='ciudad']").val(),
						telefono	= form.find( "input[name='telefono']").val(),
						comentario	= form.find( "textarea[name='comentario']").val(),
						_token		= form.find( "input[name='_token']").val(),
						action		= form.attr( "action"),
						url			= action;

					var posting = $.post(
						url, { nombre: nombre, telefono: telefono, ciudad: ciudad, email: email, _token: _token, comentario: comentario }
					);
					posting.done(function( data ){
						$('#contactForm')[0].reset();
						$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
						
						var google_conversion_id = 823452875;
						var google_conversion_label = "pdQICI2cw4ABEMvJ04gD";
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
						
						console.log('contact email sent and google stuff');

					});
				},
				overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
					autoDetect : true, debug : true
				};
			var $validate = $('#contactForm').validate(formSettings).data('validate');
		});
	</script>
@stop