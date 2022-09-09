<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
	$name = get_the_author_meta( 'display_name' );
	$image = get_field('banner_image');
?>

<section class="banner banner-post" <?php if ( $image['banner_image_large'] ) { ?>style="background-image: url('<?php echo $image['banner_image_large']['url']; ?>')"<?php } ?>>
	<div class="banner--content">
		<div class="banner--text">
			<h1 class="heading-2"><?php the_title(); ?></h1>
			<div class="posts-item--meta"><p><?php echo get_the_date('d.m.y'); ?></p>&nbsp;<p>/</p>&nbsp;<p><?php echo $name; ?></p></div>
		</div>
	</div>
	<?php if ( $image['banner_image_large'] ) { ?><img loading="lazy" class="banner--image hidemobile" src="<?php echo $image['banner_image_large']['url']; ?>" alt="<?php echo $image['banner_image_large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['banner_image_mobile'] ) { ?><img loading="lazy" class="banner--image hidedesktop" src="<?php echo $image['banner_image_mobile']['url']; ?>" alt="<?php echo $image['banner_image_mobile']['alt']; ?>" /><?php } ?>
</section>

<article>
	<?php the_content(); ?>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
