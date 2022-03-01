<?php
/**
* The template used for displaying a cta block.
*/
$content = get_field('cta_content');
$button = get_field('cta_button');
$bkg = get_field('bkg-colour');
$padding = get_field('cta_padding');
?>

<section class="cta <?php echo $bkg ?><?php if ( $padding == 'padding-large' ) { ?> cta--padding__large<?php } ?>">
	<div class="cta--inner container">
		<?php if ($content) { ?>
		<div class="cta--content">
			<?php echo $content; ?>
		</div>
		<?php } ?>

		<?php if ($button) { ?>
			<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
		<?php } ?>
		</div>
</section>
