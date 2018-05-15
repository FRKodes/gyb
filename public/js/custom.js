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
