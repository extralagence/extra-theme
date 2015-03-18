<?php

// GLOBAL OPTIONS
global $extra_options;


?><!DOCTYPE html>
<!--[if lt IE 7 ]>
<html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]>
<html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]>
<html <?php language_attributes(); ?> class="no-js ie ie9 lte9 recent"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="recent noie no-js" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

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

	<!-- REMOVE NO-JS -->
	<!--noptimize-->
	<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '') + ' js';</script>
	<!--/noptimize-->

	<!-- ANALYTICS TRACKER -->
	<?php get_template_part( "google-analytics" ); ?>

	<!-- MOBILE FRIENDLY -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- IE9.js -->
	<!--[if (gte IE 6)&(lte IE 8)]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie.css"/>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/selectivizr-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/html5shiv.js"></script>
	<![endif]-->

	<!-- WORDPRESS HOOK -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>

<?php include_once THEME_PATH . '/assets/img/sprite.svg'; ?>

<div id="mobile-menu-container">

	<button id="switch-mobile-menu">
	<span class="inner">
		<span class="part part-1"></span>
		<span class="part part-2"></span>
		<span class="part part-3"></span>
	</span>
	</button>

	<?php $args = array(
		'theme_location' => 'mobile',
		'container'      => 'div',
		'container_id'      => 'mobile-menu',
		'menu_id'        => null
	);
	wp_nav_menu( $args ); ?>
</div>

<div id="wrapper">

	<header id="header">
		<div class="wrapper">
			<div class="inner">
				<!-- SITE TITLE (LOGO) -->
				<?php if ( is_front_page() ): ?>
					<h1 class="site-title">
						<svg class="icon sprite-logo">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sprite-logo"></use>
						</svg>
						        <span class="text">
							        <span class="line1">Eurallia</span><br>
							        <span class="line2">Finance</span>
						        </span>
					</h1>
				<?php else: ?>
					<h2 class="site-title">
						<a href="<?php echo site_url( '/' ); ?>" title="<?php _e( "Retour à l'accueil", 'extra' ); ?>">
							<svg class="icon sprite-logo">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sprite-logo"></use>
							</svg>
							        <span class="text">
								        <span class="line1">Eurallia</span><br>
								        <span class="line2">Finance</span>
							        </span>
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
			</div>
		</div>
		<?php get_template_part("extra-main-image"); ?>
		<?php get_template_part("sub-navigation"); ?>
	</header>