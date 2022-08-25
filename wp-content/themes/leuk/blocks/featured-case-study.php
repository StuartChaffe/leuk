<?php
/**
* The template used for displaying a featured posts block.
*/
$title = get_field('featured_casestudy_title');
$featuredcasestudy = get_field( 'select_casestudies' );
?>
<div class="bkg--white">
<?php if ( $title ) { ?>
	<div class="container">
		<div class="posts--title fade"><?php echo $title; ?></div>
	</div>
<?php } ?>

<div class="container">
<section class="posts case-study">
	<?php if( $featuredcasestudy ): ?>

		<?php foreach( $featuredcasestudy as $featured ):
			$image = get_the_post_thumbnail($featured);
			$casestudytitle = get_the_title($featured);
			$excerpt = get_the_excerpt($featured);
		?>
		<a href="<?php esc_url( the_permalink($featured) ); ?>" class="posts-item" title="Article: <?php echo $casestudytitle; ?>">
		<div class="posts-item--image">
			<?php echo get_the_post_thumbnail($featured); ?>
		</div>
		<div class="posts-item--content">
			<h4><strong><?php echo $casestudytitle; ?></strong></h4>
			<p><?php echo $excerpt; ?></p>
		</div>

		<div class="posts-item__hover"><p>Read more</p> <svg class="icon"><use xlink:href="#post-arrow"></use></svg></div>
	</a>
		<?php endforeach; ?>

	<?php endif; ?>
</section>
</div>
</div>
