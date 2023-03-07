$(function () {
	AOS.init();

	$('.burger').click(function (e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.main_menu').toggleClass('active');
	});

	$('input').click(function (argument) {
		if (!$(this).parent().is('active')) {
			$(this).parent().addClass('active');
		}
	});
	$('input').on('blur', function () {
		let lngt = $(this).val().length;
		console.log(lngt);
		if (lngt <= 0) {
			$(this).parent().removeClass('active');
		}
	});



	$(window).scroll(function () {if ($(this).scrollTop() > 70) {$('.scroll_top').addClass('active');} else {$('.scroll_top').removeClass('active');}});
	$('.scroll_top').click(function () {$('body,html').animate({scrollTop: 0}, 800); return false;});
	$('.section_01').mousemove(function(e){
		var posX = e.pageX/40;
		var posY= e.pageY/40;
		$('.section_01__figures__image01').css("transform","translate("+posX+"px,"+posY+"px)");
		$('.section_01__figures__image02').css("transform","translate("+posX+"px,"+posY+"px)");
	});
	$('.section_03').mousemove(function(e){
		var posX = e.pageX/40;
		var posY= e.pageY/40;
		$('.figure_01').css("transform","translate("+posX+"px,"+posY+"px)");
		$('.figure_02').css("transform","translate("+posX/2+"px,"+posY/2+"px)");
		$('.figure_04').css("transform","translate("+posX/2+"px,"+posY/2+"px)");
		$('.figure_05').css("transform","translate("+posX+"px,"+posY+"px)");
	});
	$('.section_04').mousemove(function(e){
		var posX = e.pageX/50;
		var posY= e.pageY/50;
		$('.elips_01').css("transform","translate("+posX+"px,"+posY+"px)");
		$('.elips_02').css("transform","translate("+posX/2+"px,"+posY/2+"px)");
		
	});
});


