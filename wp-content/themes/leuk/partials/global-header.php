<?php
/**
* The template used for displaying an accordion.
*/
$logoprimary = get_field( 'logo_primary', 'options');
$logoteleport = get_field( 'logo_teleport', 'options');
$logodatacentre = get_field( 'logo_datacentre', 'options');
?>

<header class="global-header">
	<div class="global-header__inner">
		<div class="global-header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo $logoprimary['url']; ?>" alt="<?php echo $logoprimary['alt']; ?>" /></a></div>
		
		<nav class="global-header--nav">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>

		<div class="global-header--nav-contact">
			<a href="">Contact Us</a>
		</div>



		<button class="global-header--nav-btn" type="button">
			<span class="global-header--nav-box">
				<span class="global-header--nav-inner"><span>Show menu</span></span>
			</span>
		</button>

		<nav class="global-header--nav global-header--nav__mobile">
			<?php wp_nav_menu( array('theme_location' => 'mobile') ); ?>
		</nav>
	</div>
</header>