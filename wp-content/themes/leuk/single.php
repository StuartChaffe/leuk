<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
	$name = get_the_author_meta( 'display_name' );
?>

<section class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
	<div class="banner--content">
		<div class="banner--text">
			<h1 class="heading-2"><?php the_title(); ?></h1>
			<div class="posts-item--meta"><p><?php echo get_the_date('d.m.y'); ?></p>&nbsp;<p>/</p>&nbsp;<p><?php echo $name; ?></p></div>
		</div>
	</div>
</section>

<article>
	<?php the_content(); ?>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
