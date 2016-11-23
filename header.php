<?php

// GLOBAL OPTIONS
global $extra_options;


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--
	EEEEEEEEEEE               EEEE
	EEEEEEEEEEE EEEE   EEEE EEEEEEEE EEEEEEEEEEEEEEEEE
	EEEE         EEEEEEEEE  EEEEEEEE EEEEEEEE EEEEEEEEEE
	EEEEEEEEEE    EEEEEEE     EEEE    EEEE        EEEEEE
	EEEE           EEEEE      EEEE    EEEE    EEEEEEEEEE
	EEEEEEEEEEE  EEEEEEEEE    EEEEEE  EEEE    EEEE EEEEE
	EEEEEEEEEEE EEEE   EEEE   EEEEEE  EEEE     EEEEE EEEE
	-->

	<!-- FOR ANDROID -->
	<meta name="theme-color" content="#FF0000">

	<!-- TITLE -->
	<title><?php wp_title( '|' ); ?></title>

	<!-- JS CHECKER -->
	<script>
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '') + ' js';
	</script>

	<!-- TYPEKIT -->
	<script src="https://use.typekit.net/zed3dwt.js"></script>
	<script>try {
			Typekit.load({async: true});
		} catch (e) {
		}</script>

	<!-- MOBILE FRIENDLY -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- WORDPRESS HOOK -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'extra/modules/fancybox/templates/header-part-fancybox' ); ?>
<?php get_template_part( 'extra/templates/header/header-mobile' ); ?>
<?php echo get_search_form(); ?>


<div id="wrapper">
<?php get_template_part( 'extra/templates/header/header-desktop' ); ?>