<?php
/**
* The template used for displaying a banner.
*/
$image = get_field('banner_image');
$img = get_field('images');
$content = get_field('banner_content');
$button = get_field('banner_button');
$form = get_field('banner_form', false, false);
$size = get_field('banner_size');
?>

<section class="banner<?php if ( $size == 'banner__small' ) { ?> banner__small<?php } ?>" <?php if ( $img ) { ?>style="background-image: url('<?php echo $img['image_large']['url']; ?>')"<?php } ?>>
	<?php if ( $content ) { ?>
		<div class="banner--content">
			<div class="banner--text">
				<?php echo $content ?>
			</div>

			<?php if ($button) { ?>
			<div class="banner--button">
				<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
			</div>
			<?php } ?>

			<?php if ($form) { ?>
			<div class="banner--form">
				<?php echo $form ?>
			</div>
			<?php } ?>
		</div>
	<?php } ?>
	<?php if ( $img ) { ?><img loading="lazy" class="banner--image hidemobile" src="<?php echo $img['image_large']['url']; ?>" alt="<?php echo $img['image_large']['alt']; ?>" /><?php } ?>
	<?php if ( $img ) { ?><img loading="lazy" class="banner--image hidedesktop" src="<?php echo $img['image_mobile']['url']; ?>" alt="<?php echo $img['image_large']['alt']; ?>" /><?php } ?>
</section>
