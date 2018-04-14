<div class="col-xs-12 col-sm-8 col-md-6 ml-md-auto mr-md-auto m-bottom-40">
	
	<h2 class="text-center section-title passion mayus blue">¡Deja tus datos para una cotización!</h2>

	<form action="/sendmail-refacciones" method="post" id="contactFormRefacciones">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<input type="text" name="nombre" placeholder="*Nombre" class="form-control" data-validate="required">
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
			<input type="submit" class="button-colors" value="Enviar">
		</div>
		<div class="sent_mail_alert text-center">¡GRACIAS!<br>Tu comentario se ha enviado con éxito. En breve nos pondremos en contacto contigo.</div>
	</form>

</div>