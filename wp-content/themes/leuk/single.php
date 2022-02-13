<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
	<article>
		<?php the_content(); ?>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>
