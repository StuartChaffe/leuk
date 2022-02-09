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
	// $fname = get_the_author_meta('first_name');
	// $lname = get_the_author_meta('last_name');
	$author_id = get_post_field ('post_author', $posts);
	$name = get_the_author_meta( 'display_name' , $author_id );
	// $full_name = $fname + $lname;
?>

<?php if ($posts->have_posts()) : ?>
<section class="posts">
<?php while($posts->have_posts()) : $posts->the_post(); ?>
	<a href="<?php esc_url( the_permalink() ); ?>" class="posts-item" title="Article: <?php the_title(); ?>">
		<div class="posts-item--image">
			<?php echo get_the_post_thumbnail(); ?>
		</div>
		<div class="posts-item--content">
			<div class="posts-item--meta"><p><?php echo get_the_date('d.m.y'); ?></p>&nbsp;<p>/</p>&nbsp;<p>s<?php echo $name; ?></p></div>
			<h4><strong><?php the_title(); ?></strong></h4>
		</div>

		<svg class="icon"><use xlink:href="#post-arrow"></use></svg>
	</a>
<?php endwhile; wp_reset_query(); ?>
</section>
<?php endif; ?>
