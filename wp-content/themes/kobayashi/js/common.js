// Page to Top
$('.btn_pagetop a').click(function () {
	$('body,html').animate({
		scrollTop: 0,
	}, 800);
	return false;
});

// Anker link
$('section a[href^="#"]').not('.interview_tab a[href*="#interview"]').click(function() {
	var adjust = $('header').height();
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top - adjust - 24;
	// console.log("anker", target);
	$('body,html').animate({scrollTop:position}, 800, 'swing');
	return false;
});

// other page Anker link
$(window).on('load', function() {
	const url = $(location).attr('href');
	headerHeight = $('header').outerHeight() + 40;
	if(url.indexOf("#") != -1){
		const anchor = url.split("#");
		target = $('#' + anchor[anchor.length - 1]);
		// position = Math.floor(target.offset().top) - headerHeight;
		position = target.offset().top - headerHeight;
		$("html, body").animate({scrollTop:position}, 800);
	}
});
