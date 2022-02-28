<?php
/**
* The template used for displaying a content block.
*/
$content = get_field('content');
$linkid = get_field('link_id');
$padding = get_field('content_padding');
?>

<section class="content<?php if ( $padding == 'padding-small' ) { ?> content--padding__small<?php } ?>"<?php if ($linkid) { ?> id="<?php echo $linkid; ?>"<?php } ?>>
	<?php echo $content; ?>
</section>
