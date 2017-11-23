@extends('app')

@section('content')
	<div class="inner-banner contacto"></div>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12 section-title passion">Ponte en contacto</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cumque ex ratione possimus, error, asperiores, quidem odio aspernatur nobis ducimus quibusdam eveniet cum earum accusamus sunt labore porro nemo nostrum!</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 form">
				<form action="/sendmail" method="post" id="contactForm">
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
					
				</form>
			</div>
			<div class="col-sm-6 info-map">
				<div class="info">
					<p class="block-title"><strong>Informes y ventas:</strong></p>
					<p class="light">
						Tel: <a href="tel:3314151617">(33) 14151617</a> <br>
						<a href="mailto:info@gyb.com.mx">info@gyb.com.mx</a> <br>
						Av. Lázaro Cárdenas No. 12345 <br>
						col. Lorem ipsum dolor. C.P. 45550 <br>
						GDL, MX.
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