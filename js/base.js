$(document).ready(function(){
	$('.btn-box').mouseenter(function(){
		$('.btn-box').stop(true, true).animate({backgroundColor: "#165F30"}), 500;
		$('.txt-btn').stop(true, true).fadeOut('fast');
		$('.ico').stop(true, true).animate({color: "#fff",marginRight:"0px"}), 500;
	}).mouseleave(function(){
		$('.btn-box').stop(true, true).animate({backgroundColor: "transparent"}), 500;
		$('.txt-btn').stop(true, true).fadeIn('fast');
		$('.ico').stop(true, true).animate({color: "#165F30",marginRight:"15px"}), 500;
	});

	$('#menu-open').click(function(){
		$('#menunav').fadeIn('slow');
	});
	$('#menu-close').click(function(){
		$('#menunav').fadeOut('slow');
	});
});