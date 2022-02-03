<?php
/**
* The template used for displaying all posts.
*/
// $title = get_field('posts_title');
// $intro = get_field('posts_intro');
?>
<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>

<?php if ($posts->have_posts()) : ?>
<section class="posts">
<?php while($posts->have_posts()) : $posts->the_post(); ?>
	<a href="<?php esc_url( the_permalink() ); ?>" class="posts-item" title="Article: <?php the_title(); ?>">
		<div class="posts-item--image">
			<?php echo get_the_post_thumbnail(); ?>
		</div>
		<div class="posts-item--meta"><p><strong><?php the_author(); ?></strong></p> / <p><?php echo get_the_date('d.m.y'); ?></p></div>
		<div class="posts-item--content">
			<p><?php the_title(); ?></p>
		</div>
	</a>
<?php endwhile; wp_reset_query(); ?>
</section>
<?php endif; ?>
