<?php
/**
* The template used for displaying an accordion.
*/
$company = get_field( 'footer_company', 'options');
$logoprimary = get_field( 'logo_primary_white', 'options');
$menu = get_field( 'footer_menu', 'options');
?>

<footer class="global-footer">
	<div class="global-footer__inner">
		<div class="global-footer--company">
			<img src="/wp-content/uploads/Leuk-TDC-white.svg" alt="" width="250">
			<?php echo $company; ?>
			<ul class="social-links">
			<?php if(get_field('linkedin', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('twitter', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('facebook', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('instagram', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('youtube', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
			<?php endif; ?>
			</ul>
		</div>

		<div class="global-footer--content">
			<?php echo $menu; ?>
		</div>
	</div>
	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
</footer>
