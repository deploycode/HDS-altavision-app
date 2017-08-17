$(document).ready(function(){
	$('#subir').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});

	$('#downToContact').click(function(){
		$('body, html').animate({
			scrollTop: $(document).height()}, 1000);
	});

	$('#scrollspy a').click(function(){
			$('#menu').removeClass('in');
	});

	if(screen.width<768){
		$('.imagen50').addClass('img-circle');
		$(".imagen50").css({"width": "60%" , "margin": "auto"});
		$("#scrollspy").addClass('navbar-fixed-top');
	}
});
