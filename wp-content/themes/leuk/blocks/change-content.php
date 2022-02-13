<?php
/**
* The template used for displaying a block with changing content.
*/
$logo1 = get_field('contentswitcher_logo_1');
$logo2 = get_field('contentswitcher_logo_2');
$content1 = get_field('contentswitcher_content_1');
$content2 = get_field('contentswitcher_content_2');
?>

<div class="change-content">
	<div class="link link-one"><?php if ( $logo1  ) { ?><img loading="lazy" src="<?php echo $logo1['url']; ?>" alt="<?php echo $logo1['alt']; ?>" /><?php } ?></div>
	<div class="link link-two"><?php if ( $logo2  ) { ?><img loading="lazy" src="<?php echo $logo2['url']; ?>" alt="<?php echo $logo2['alt']; ?>" /><?php } ?></div>
	<?php if ( $content1 ) { ?><div class="change-content--content content-one"><?php echo $content1 ?></div><?php } ?>
	<?php if ( $content2 ) { ?><div class="change-content--content content-two"><?php echo $content2 ?></div><?php } ?>
</div>
