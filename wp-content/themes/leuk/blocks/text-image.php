<?php
/**
* The template used for displaying a text with image block.
*/
$content = get_field('text-image-content');
$button = get_field('button');
$bkg = get_field('bkg-colour');
$image = get_field('image');
?>

<section class="text-image <?php echo $bkg ?> <?php echo $image['text-image-position'] ?>">
	<div class="text-image--content">
		<div class="text-image--content-inner">
			<?php echo $content ?>

		<?php if( have_rows('list') ) { ?>
			<?php while( have_rows('list') ): the_row();
				$icon = get_sub_field('list_image');
				$content = get_sub_field('list_content');
			?>
				<div class="text-image-list">
					<div class="text-image-list--image">
						<?php if ( $icon ) { ?><img class="text-image-list--image" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /><?php } ?>
					</div>
					<div class="text-image-list--content">
						<?php echo $content; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php } ?>

			<?php if ($button) { ?>
				<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
			<?php } ?>
		</div>
	</div>
	<div class="text-image--image" style="background-image: url('<?php echo $image['text-image-image']['url']; ?>')">
		<img class="<?php if ( $image['text-image-mobile-image'] ) { ?>hidemobile<?php } ?>" loading="lazy" src="<?php echo $image['text-image-image']['url']; ?>" alt="<?php echo $image['text-image-image']['alt']; ?>" />
		<?php if ( $image['text-image-mobile-image'] ) { ?><img class="hidedesktop" loading="lazy" src="<?php echo $image['text-image-mobile-image']['url']; ?>" alt="<?php echo $image['text-image-mobile-image']['alt']; ?>" /><?php } ?>
	</div>
</section>
