// Page to Top
$('.btn_pagetop a').click(function () {
	$('body,html').animate({
		scrollTop: 0,
	}, 800);
	return false;
});

// Anker link
$('section a[href^="#"]').click(function() {
	var adjust = $('header').height();
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top - adjust - 40;
	// console.log("anker", target);
	$('body,html').animate({scrollTop:position}, 500, 'swing');
	return false;
});

// other page Anker link
$(window).on('load', function() {
	const url = $(location).attr('href');
	headerHeight = $('header').outerHeight() + 20;
	if(url.indexOf("#") != -1){
		const anchor = url.split("#");
		target = $('#' + anchor[anchor.length - 1]);
		// position = Math.floor(target.offset().top) - headerHeight;
		position = target.offset().top - headerHeight;
		$("html, body").animate({scrollTop:position}, 500);
	}
});
