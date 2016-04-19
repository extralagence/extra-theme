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

	<!-- TITLE -->
	<title><?php wp_title( '|' ); ?></title>

	<!--noptimize-->
	<script>
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '') + ' js';
	</script>
	<!--/noptimize-->

	<!-- MOBILE FRIENDLY -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- WORDPRESS HOOK -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<input id="mobile-menu-switch-manager" type="checkbox">
<label for="mobile-menu-switch-manager" id="mobile-menu-switcher">
	<span class="mobile-menu-switcher-inner"></span>
</label>
<label id="mobile-menu-overlay" for="mobile-menu-switch-manager"></label>


<header id="mobile-menu-container">
	<?php $args = array(
		'theme_location' => 'mobile',
		'container'      => 'div',
		'container_id'   => 'mobile-menu',
		'menu_id'        => null
	);
	wp_nav_menu( $args ); ?>
</header>

<div id="wrapper">

	<header id="header">
		<!-- SITE TITLE (LOGO) -->
		<?php if ( is_front_page() ): ?>
			<h1 class="site-title">
				<span class="text"><?php bloginfo( "name" ); ?></span>
			</h1>
		<?php else: ?>
			<h2 class="site-title">
				<a href="<?php echo site_url( '/' ); ?>" title="<?php _e( "Retour à l'accueil", 'extra' ); ?>">
					<span class="text"><?php bloginfo( "name" ); ?></span>
				</a>
			</h2>
		<?php endif; ?>

		<!-- MAIN NAV -->
		<nav id="main-menu-container">
			<?php $args = array(
				'theme_location' => 'main',
				'container'      => null,
				'menu_id'        => 'main-menu'
			);
			wp_nav_menu( $args ); ?>
		</nav>
	</header>