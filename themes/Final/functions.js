
$(document).ready(function(){
	//alert('hola');
	$('#menu2').hide();

	$('.mproyectos').mouseenter(function(){
		$('#menu2').slideDown();
	});

	 $('#menu2').mouseleave(function(){
		$('#menu2').slideUp();
	});


	//$('#sliderfoto').cycle();

	$('.galeria').cycle();

	$('.posts-fotos').click(function(){
		$('.posts-fotos').slideDown();
	});


	
	 $('.featured-fotos').on('click', function(){
	 	if( $(this).hasClass('grande') ){
	 		$(this).removeClass('grande');
	 	} else {
	 		$('.grande').removeClass('grande');
	 		$(this).addClass('grande');
	 	}
	});
});
	// $('.featured-fotos').on('click', function(){
	// 	if( $(this).hasClass('grande') ){
	// 		$(this).removeClass('grande');
	// 	} else {
	// 		$('.grande').removeClass('grande');
	// 		$(this).addClass('grande');
	// 	}
	// });

	





