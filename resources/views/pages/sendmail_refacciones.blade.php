<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GYB</title>
</head>
<body>
	<?php
	Mail::send('emails.refas-maquinas-email', [], function($message){
	    $message->to('info@gyb.mx', 'GyB Refacciones Web')->cc('garcia_sandoval87@hotmail.com', 'GyB Refacciones Web')->cc('frkalderon@gmail.com', 'GyB Refacciones Web')->subject('Contacto refacciones desde GyB Web');
	});
	?>
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 823452875;
	var google_conversion_label = "YOo9CK-aw4ABEMvJ04gD";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/823452875/?label=YOo9CK-aw4ABEMvJ04gD&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
</body>
</html>