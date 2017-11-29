console.log('ok!');

function initMap() {
	var myLatLng = {lat: 20.570726, lng: -103.340889};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: myLatLng
	});
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'GyB Maquinaria + Minería'
	});
}

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
				console.log('email sent! \n' + data );
				$('#contactForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
			});
		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
			autoDetect : true, debug : true
		};
	var $validate = $('#contactForm').validate(formSettings).data('validate');
});

$('.brands-container').slick({
	dots: true,
	infinite: true,
	speed: 300,
	autoplay: true,
	slidesToShow: 4,
	slidesToScroll: 3,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});

$('.brands-container-01').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});
