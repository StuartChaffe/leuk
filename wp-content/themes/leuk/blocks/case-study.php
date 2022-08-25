<?php
/**
* The template used for displaying all case study.
*/
// $title = get_field('posts_title');
// $intro = get_field('posts_intro');
?>
<?php
	$posts = new WP_Query( array(
		'post_type' => 'case-study',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>

<?php if ($posts->have_posts()) : ?>
<div class="container">
<section class="posts case-study">
<?php while($posts->have_posts()) : $posts->the_post();
	$author_id=$posts->post_author;
	$name = get_the_author_meta( 'display_name' , $author_id );
 ?>
	<a href="<?php esc_url( the_permalink() ); ?>" class="posts-item" title="Article: <?php the_title(); ?>">
		<div class="posts-item--image">
			<?php echo get_the_post_thumbnail(); ?>
		</div>
		<div class="posts-item--content">
			<h4><strong><?php the_title(); ?></strong></h4>
			<p><?php the_excerpt(); ?></p>
		</div>

		<div class="posts-item__hover"><p>Read more</p> <svg class="icon"><use xlink:href="#post-arrow"></use></svg></div>
	</a>
<?php endwhile; wp_reset_query(); ?>
</section>
</div>
<?php endif; ?>
