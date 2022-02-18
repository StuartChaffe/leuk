<?php
/**
* The template used for displaying a content block.
*/
$content = get_field('content');
$linkid = get_field('link_id');
?>

<section class="content"<?php if ($linkid) { ?> id="<?php echo $linkid; ?>"<?php } ?>>
	<?php echo $content; ?>
</section>
