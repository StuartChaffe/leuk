<?php
/**
* The template used for displaying a logos block.
*/
$bkg = get_field('bkg-colour');
?>

<section class="logos <?php echo $bkg ?>">
<?php if( have_rows('logos') ) { ?>
	<div class="logos-inner">
		<?php if( have_rows('logos') ): ?>

			<?php while( have_rows('logos') ): the_row();
				$logo = get_sub_field('logo');
			?>
			<div class="logos-item">
				<img loading="lazy" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php } ?>

</section>
