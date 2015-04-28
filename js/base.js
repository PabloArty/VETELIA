$(document).ready(function(){
	$('.btn-box').mouseenter(function(){
		$('.ico').stop(true, true).animate({color: "#fff", marginRight:"0px"}), 500;
		$('.btn-box').stop(true, true).animate({backgroundColor: "#165F30"}), 500;
		$('.txt-btn').stop(true, true).fadeOut('fast');
	});
	$('.btn-box').mouseleave(function(){
		$('.ico').stop(true, true).animate({color: "#165F30", marginRight:"15px"}), 500;
		$('.btn-box').stop(true, true).animate({backgroundColor: "transparent"}), 500;
		$('.txt-btn').stop(true, true).fadeIn('fast');
	});

	$('#menu-open').click(function(){
		$('#menunav').fadeIn('slow');
	});
	$('#menu-close , .menu-item , .menu-subitem').click(function(){
		$('#menunav').fadeOut('slow');
	});

	$('#colores > .fp-slidesNav').removeClass('bottom');
	$('#colores > .fp-slidesNav').addClass('nav-colors');
});

