<?php
/**
* The template used for displaying a services block.
*/
$contentleft = get_field('services_content_left');
$contentright = get_field('services_content_left');
?>
<div class="services">
	<div class="services-item bkg--grey">
		<?php echo $contentleft; ?>
	</div>
	<div class="services-item">
		<?php echo $contentright; ?>
	</div>
</div>
