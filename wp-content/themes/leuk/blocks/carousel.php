<?php
/**
* The template used for displaying a carousel.
*/
$image = get_field('banner_image');
$content = get_field('carousel_content');
$button = get_field('carousel_button');
?>

<!-- Swiper -->
<div class="carousel swiper">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="background-image: url('http://leuk.local:3000/wp-content/uploads/homepage-banner.jpg');"><img class="swiper-slide-image" src="http://leuk.local:3000/wp-content/uploads/homepage-banner.jpg" alt="" /></div>
		<div class="swiper-slide" style="background-image: url('http://leuk.local/wp-content/uploads/carousel.jpg');"><img class="swiper-slide-image" src="http://leuk.local/wp-content/uploads/carousel.jpg" alt="" /></div>
		<div class="swiper-slide" style="background-image: url('http://leuk.local:3000/wp-content/uploads/homepage-banner.jpg');"><img class="swiper-slide-image" src="http://leuk.local:3000/wp-content/uploads/homepage-banner.jpg" alt="" /></div>
		<div class="swiper-slide" style="background-image: url('http://leuk.local/wp-content/uploads/carousel.jpg');"><img class="swiper-slide-image" src="http://leuk.local/wp-content/uploads/carousel.jpg" alt="" /></div>
	</div>

	<?php if ( $content ) { ?>
		<div class="swiper--content">
			<div class="swiper--text">
		    	<?php echo $content ?>
			</div>

			<div class="swiper--button">
			<?php if ($button) { ?>
				<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
			<?php } ?>
			</div>
		</div>
	<?php } ?>
	<div class="swiper-button swiper-button-next"></div>
	<div class="swiper-button swiper-button-prev"></div>
</div>
