<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png"><!-- 180×180 -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');
</style>
<?php wp_head(); ?>
</head>
<?php
/**
* The template used for displaying an accordion.
*/
$bkg = get_field( 'background_image');
$bkgmobile = get_field( 'background_image_mobile');
?>

<body <?php body_class(); ?> <?php if ( $bkg ) { ?>style="background-image: url('<?php echo $bkg['url']; ?>')"<?php } ?>>
<?php if ( $bkgmobile ) { ?><img loading="lazy" class="bkg--image hidedesktop" src="<?php echo $bkgmobile['url']; ?>" alt="<?php echo $bkgmobile['alt']; ?>" /><?php } ?>
<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<div class="global-container">
<?php get_template_part( 'partials/global-alert' ); ?>
<?php get_template_part( 'partials/global-header' ); ?>
