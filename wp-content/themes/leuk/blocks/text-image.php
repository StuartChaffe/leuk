<?php
/**
* The template used for displaying a text with image block.
*/
$content = get_field('text-image-content');
$bkg = get_field('bkg-colour');
$image = get_field('image');
?>

<section class="text-image <?php echo $bkg ?> <?php echo $image['text-image-position'] ?>">
	<div class="text-image--content">
		<div class="text-image--content-inner">
			<?php echo $content ?>
		</div>
	</div>
	<div class="text-image--image" style="background-image: url('<?php echo $image['text-image-image']['url']; ?>')">
		<img class="hidedesktop <?php if ( $image['text-image-mobile-image'] ) { ?>hidemobile<?php } ?>" loading="lazy" src="<?php echo $image['text-image-image']['url']; ?>" alt="<?php echo $image['text-image-image']['alt']; ?>" />
		<?php if ( $image['text-image-mobile-image'] ) { ?><img class="hidedesktop" loading="lazy" src="<?php echo $image['text-image-mobile-image']['url']; ?>" alt="<?php echo $image['text-image-mobile-image']['alt']; ?>" /><?php } ?>
	</div>
</section>
