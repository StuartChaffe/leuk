<?php
/**
* The template used for displaying a contact block.
*/
$contentleft = get_field('contact_left');
$contentright = get_field('contact_right');
$form = get_field('contact_form');
?>

<section class="contact">
<?php if ($contentleft) { ?>
	<div class="contact-item contact-left">
		<?php echo $contentleft; ?>
	</div>
	<?php } ?>
	<?php if ($form) { ?>
	<div class="contact-item contact-form">
		<?php echo $form; ?>
	</div>
	<?php } ?>

	<?php if ($contentright) { ?>
	<div class="contact-item contact-left">
		<?php echo $contentright; ?>
	</div>
	<?php } ?>
</section>
