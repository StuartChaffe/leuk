<?php
/**
* The template used for displaying a column block.
*/
$bkg = get_field('bkg-colour');
?>

<section class="columns <?php echo $bkg ?>">

<?php if( have_rows('column') ) { ?>
	<div class="columns--inner">
	<?php while( have_rows('column') ): the_row();
		$content = get_sub_field('column_content');
		$icon = get_sub_field('column_icon');
	?>
		<div class="columns-item">
			<?php if ( $icon ) { ?><img class="columns-item--image" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /><?php } ?>
			<div class="columns-item--content">
				<?php echo $content; ?>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
<?php } ?>

</section>
