<?php
/**
* The template used for displaying a carousel.
*/
$content = get_field('carousel_content');
$button = get_field('carousel_button');
?>

<!-- Swiper -->
<div class="carousel swiper">

<?php if( have_rows('carousel_images') ) { ?>
	<div class="swiper-wrapper">
		<?php while( have_rows('carousel_images') ): the_row();
			$image = get_sub_field('image');
		?>
		<div class="swiper-slide" style="background-image: url('<?php echo $image['url']; ?>');"><img class="swiper-slide-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
		<?php endwhile; ?>
	</div>
<?php } ?>
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
