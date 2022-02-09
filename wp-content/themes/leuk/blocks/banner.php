<?php
/**
* The template used for displaying a banner.
*/
$image = get_field('banner_image');
$content = get_field('banner_content');
$button = get_field('banner_button');
?>

<section class="banner" <?php if ( $image['banner_image_large'] ) { ?>style="background-image: url('<?php echo $image['banner_image_large']['url']; ?>')"<?php } ?>>
	<?php if ( $content ) { ?>
		<div class="banner--content">
			<div class="banner--text">
				<?php echo $content ?>
			</div>

			<div class="banner--button">
			<?php if ($button) { ?>
				<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
			<?php } ?>
			</div>
		</div>
	<?php } ?>
	<?php if ( $image['banner_image_large'] ) { ?><img loading="lazy" class="banner--image hidemobile" src="<?php echo $image['banner_image_large']['url']; ?>" alt="<?php echo $image['banner_image_large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['banner_image_mobile'] ) { ?><img loading="lazy" class="banner--image hidedesktop" src="<?php echo $image['banner_image_mobile']['url']; ?>" alt="<?php echo $image['banner_image_mobile']['alt']; ?>" /><?php } ?>
</section>
