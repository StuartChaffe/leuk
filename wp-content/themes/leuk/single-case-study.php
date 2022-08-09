<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article>
	<?php the_content(); ?>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
