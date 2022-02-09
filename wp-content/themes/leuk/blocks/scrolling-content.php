<?php
/**
* The template used for displaying a scrolling content block.
*/
$content = get_field('content');
$background = get_field('background');
?>

<section class="scrolling-content">
	<div class="scrolling-content--content <?php echo $background['background_colour'] ?>" style="background-color:<?php if ( $background['background_colour']  == 'bkg-black' ) { ?> rgba(0,0,0,0.<?php echo $background['background_transparency'] ?>)<?php } elseif ( $background['background_colour']  == 'bkg-white' ) { ?>rgba(255,255,255,0.<?php echo $background['background_transparency'] ?>);<?php } ?>">
		<div>
			<div class="scrolling-content--text">
				<?php echo $content['content_text'] ?>
			</div>
			<div class="scrolling-content--button">
				<?php if ($content['content_button']) { ?>
					<span class="btn btn--primary"><a href="<?php echo $content['content_button']['url']; ?>" target="<?php echo $content['content_button']['target']; ?>"><?php echo $content['content_button']['title']; ?></a></span>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
