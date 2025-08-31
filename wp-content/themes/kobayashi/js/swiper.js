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
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	}
});

$(window).on("resize", function() {
	console.log("A");
	swiper_main.update();
	swiper.update()
});
