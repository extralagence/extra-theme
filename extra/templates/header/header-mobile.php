<input id="mobile-menu-switch-manager" type="checkbox">
<label for="mobile-menu-switch-manager" id="mobile-menu-switcher">
	<span class="mobile-menu-switcher-inner"></span>
</label>
<label id="mobile-menu-overlay" for="mobile-menu-switch-manager"></label>
<a class="back-to-top" id="mobile-menu-to-top" href="#">
	<svg class="icon icon-arrow">
		<use xlink:href="#icon-arrow"></use>
	</svg>
</a>


<header id="mobile-menu-container">


	<!-- TITLE -->
	<h2 class="site-title">
		<a href="<?php echo site_url( '/' ); ?>" title="<?php _e( "Retour à l'accueil", 'extra' ); ?>">
			<span class="text"><?php bloginfo( "name" ); ?></span>
			<svg class="icon logo icon-logo-part-dieu">
				<use xlink:href="#icon-logo-part-dieu"></use>
			</svg>
		</a>
	</h2>



	<!-- MENU -->
	<?php $args = array(
		'theme_location' => 'mobile',
		'container'      => 'div',
		'menu_id'        => 'mobile-menu'
	);
	wp_nav_menu( $args ); ?>


</header>