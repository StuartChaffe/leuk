jQuery(document).ready(function($) {
	$(".featured-posts--slider").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 4000,
		arrows: true,
		infinite: true,
		dots: false,
		adaptiveHeight: true,
		pauseOnHover: false,
		responsive: [
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	});
});
