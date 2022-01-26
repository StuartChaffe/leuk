var swiper = new Swiper(".carousel", {
	slidesPerView: 1,
	loop: true,
	effect: "fade",
	keyboard: {
	  enabled: true,
	},
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
  });


jQuery(document).ready(function($) {
	$.fn.scrollView = function () {
		return this.each(function () {
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, 500);
		});
	}
	$('body').on('click', '.swiper-button', function () {
		$(this).closest('.carousel').scrollView();
	})
});
