const swiper_main = new Swiper('.swiper01',{
	effect: "fade",
	loop: true,
	speed: 1500,
	allowTouchMove : false,
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	}
});
const swiper = new Swiper('.swiper02',{
	effect: "fade",
	loop: true,
	speed: 1500,
	allowTouchMove : false,
	initialSlide: 1,
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	}
});

$(window).on('load resize', function() {
	swiper_main.update();
	swiper.update()
});
