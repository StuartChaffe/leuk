<?php
/**
* The template used for displaying a featured posts block.
*/
$title = get_field('featured_posts_title');
$featuredposts = get_field( 'select_posts' );
?>
<div class="bkg--white">
<?php if ( $title ) { ?>
	<div class="container">
		<div class="posts--title fade"><?php echo $title; ?></div>
	</div>
<?php } ?>

<div class="container">
<section class="featured-posts posts">
	<?php if( $featuredposts ): ?>
	<div class="featured-posts--slider">
		<?php foreach( $featuredposts as $featuredpost ):
			$title = get_the_title($featuredpost);
			// $name  = get_the_author_meta('display_name', get_the_author_meta('ID'));
			$author_id = get_post_field ('post_author', $featuredpost);
			$name = get_the_author_meta( 'display_name' , $author_id );
		?>
		<a href="<?php esc_url( the_permalink($featuredpost) ); ?>" class="featured-posts-item posts-item" title="Article: <?php the_title($featuredpost); ?>">
			<div class="posts-item--image">
				<?php echo get_the_post_thumbnail($featuredpost); ?>
			</div>
			<div class="posts-item--content">
				<div class="posts-item--meta"><p><?php echo get_the_date('d.m.y'); ?></p>&nbsp;<p>/</p>&nbsp;<p><?php echo $name; ?></p></div>
				<h4><strong><?php echo $title; ?></strong></h4>
			</div>

			<div class="posts-item__hover"><p>Read more</p> <svg class="icon"><use xlink:href="#post-arrow"></use></svg></div>
		</a>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</section>
</div>
</div>
