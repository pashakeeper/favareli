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



	$(window).scroll(function () { if ($(this).scrollTop() > 70) { $('.scroll_top').addClass('active'); } else { $('.scroll_top').removeClass('active'); } });
	$('.scroll_top').click(function () { $('body,html').animate({ scrollTop: 0 }, 800); return false; });
	$('.section_01').mousemove(function (e) {
		var posX = e.pageX / 40;
		var posY = e.pageY / 40;
		$('.section_01__figures__image01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.section_01__figures__image02').css("transform", "translate(" + posX + "px," + posY + "px)");
	});
	$('.section_03').mousemove(function (e) {
		var posX = e.pageX / 40;
		var posY = e.pageY / 40;
		$('.figure_01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.figure_02').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.figure_04').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.figure_05').css("transform", "translate(" + posX + "px," + posY + "px)");
	});
	$('.section_04').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.elips_01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.elips_02').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.learn_section, .learn__second_row').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.learn_circle_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.learn_circle_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.learn_icon').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.contact_zoom__section').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.circle_zoom_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.circle_zoom_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.event_page_section__1').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.event_girl_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.event_girl_3').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.event_girl_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.event_page_section__2').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.event_circle_yellow').css("transform", "translate(" + posX + "px," + posY + "px)");
	});
	$('.event_page_section__4, .event_page_section__5').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.may_circle_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.may_circle_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.about_us_section__1').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.about_circle_group__01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.about_circle_group__02').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.about_circle_group__03').css("transform", "translate(" + posX + "px," + posY + "px)");
	});
	$('.about_us_section__2').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.about_us_section__2__circle1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.about_us_section__2__circle2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.about_us_section__3').mousemove(function (e) {
		var posX = e.pageX / 50;
		var posY = e.pageY / 50;
		$('.galery_circle_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.galery_circle_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.about_us_section__4').mousemove(function (e) {
		var posX = e.pageX / 80;
		var posY = e.pageY / 80;
		$('.title_circle_1').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.title_circle_2').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.shop_section_01').mousemove(function (e) {
		var posX = e.pageX / 80;
		var posY = e.pageY / 80;
		$('.shop_img_01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.shop_img_02').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.shop_img_03').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.shop_img_04').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
		$('.shop_img_05').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.shop_img_06').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.shop_section_02').mousemove(function (e) {
		var posX = e.pageX / 80;
		var posY = e.pageY / 80;
		$('.shop_elips_01').css("transform", "translate(" + posX + "px," + posY + "px)");
		$('.shop_elips_02').css("transform", "translate(" + posX / 2 + "px," + posY / 2 + "px)");
	});
	$('.card input').mask("9999 9999 9999 9999");
	$('.expire input').mask("99/99");
	$('.cvc input').mask("999");


	setTimeout(function () {
		$('.cookies_modal').addClass('active');
		$('#cookies_overlay').addClass('active');
	}, 2000);
	$('.cookies').click(function (e) {
		e.preventDefault();
		$('.cookies_modal').addClass('active');
		$('body').addClass('cookies_open');
		$('#cookies_overlay').addClass('active');
	});
	$('.cookies_btn').click(function () {
		$('.cookies_modal').removeClass('active');
		$('body').removeClass('cookies_open');
		$('#cookies_overlay').removeClass('active');
	});
	$('#cookies_overlay').click(function () {
		$(this).removeClass('active');
		$('.cookies_modal').removeClass('active');
		$('body').removeClass('cookies_open');
	})
	var $root = $('html, body');

	$('section a[href^="#"]').click(function () {
		var href = $.attr(this, 'href');

		$root.animate({
			scrollTop: $(href).offset().top
		}, 700, function () {
			window.location.hash = href;
		});

		return false;
	});
	$('input').attr('autocomplete', 'off');



});


