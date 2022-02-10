<?php
/**
* The template used for displaying a cta block.
*/
$content = get_field('cta_content');
$button = get_field('cta_button');
$bkg = get_field('bkg-colour');
?>

<section class="cta <?php echo $bkg ?>">
	<div class="cta--inner container">
		<?php if ($content) { ?>
			<?php echo $content; ?>
		<?php } ?>

		<?php if ($button) { ?>
			<span class="btn btn--primary"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></span>
		<?php } ?>
		</div>
</section>
