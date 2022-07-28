<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
	$name = get_the_author_meta( 'display_name' );
	$desc = get_field('job_description');
	$details = get_field('job_details');
	$experience = get_field('job_experience');
	$apply = get_field('job_apply');
?>

<section class="banner banner-post banner__small" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
	<div class="banner--content">
		<div class="banner--text">
			<h1 class="heading-2"><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</section>

<article>
	<?php if ( $desc ) { ?>
		<h2>Job Description</h2>
		<?php echo $desc; ?>
	<?php } ?>
	<?php if ( $details ) { ?>
		<h2>Role & Responsibilities</h2>
		<?php echo $details; ?>
	<?php } ?>
	<?php if ( $experience ) { ?>
		<h2>Required Experience</h2>
		<?php echo $experience; ?>
	<?php } ?>
	<?php if ( $apply ) { ?>
		<h2>How to Apply</h2>
		<?php echo $apply; ?>
	<?php } ?>

	<?php the_content(); ?>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
