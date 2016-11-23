<?php global $extra_options; ?>
<header id="header">

	<!-- SITE TITLE (LOGO) -->
	<?php if ( is_front_page() ): ?>
		<h1 class="site-title">
			<span class="text"><?php bloginfo( "name" ); ?></span>
			<svg class="icon logo icon-logo">
				<use xlink:href="#icon-logo"></use>
			</svg>
		</h1>
	<?php else: ?>
		<h2 class="site-title">
			<a href="<?php echo site_url( '/' ); ?>" title="<?php _e( "Retour à l'accueil", 'extra' ); ?>">
				<span class="text"><?php bloginfo( "name" ); ?></span>
				<svg class="icon icon-logo">
					<use xlink:href="#icon-logo"></use>
				</svg>
			</a>
		</h2>
	<?php endif; ?>


	<div class="search">
		<label for="s">
			<svg class="icon icon-search">
				<use xlink:href="#icon-search"></use>
			</svg>
		</label>
	</div>

	<!-- MAIN NAV -->
	<nav class="main-navigation">
		<?php $args = array(
			'theme_location' => 'main',
			'container'      => null,
			'menu_id'        => 'main-menu'
		);
		wp_nav_menu( $args ); ?>
	</nav>

</header>