<?php
/**
* The template used for displaying a services block.
*/
$contentleft = get_field('contentleft');
$contentright = get_field('contentright');
?>
<div class="services">
	<div class="services-item bkg--grey">
		<?php echo $contentleft; ?>
	</div>
	<div class="services-item">
		<?php echo $contentright; ?>
	</div>
</div>
