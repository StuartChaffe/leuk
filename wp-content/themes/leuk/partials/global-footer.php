<footer class="global-footer">
	<div class="global-footer__inner">
		<div class="global-footer--company">
			<img src="/wp-content/uploads/Leuk-TDC-white.svg" alt="" width="250">
			<p>Leuk Teleport & Data Centre GA<br />
				Satellitenbodenstation Leuk Brentjong 2<br />
				CH-3953 Leuk-Stadt<br />
				Switzerland</p>
			<br />
			<p><a href="tel:+410274749111">+41 (0) 27 4749111</a><br />
			<a href="mailto:info@leuk.com">info@leuk.com</a></p>
		</div>

		<div class="global-footer--content">
			<ul>
				<li><p>Services</p></li>
				<li><a href="">Satellite Solutions</a></li>
				<li><a href="">Data Centre</a></li>
			</ul>

			<ul>
				<li><p>Resources</p></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>

			<ul>
				<li><p>Facilities</p></li>
				<li><a href="">Leuk</a></li>
			</ul>

		</div>

		<ul class="social-links">
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
	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
</footer>
