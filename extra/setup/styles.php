<?php
///////////////////////////////////////
//
//
// CSS
//
//
///////////////////////////////////////
function extra_theme_enqueue_styles() {
	// EXTRA CONTENT
	wp_enqueue_style( 'extra-content', THEME_URI . '/assets/css/content.less', array(), EXTRA_THEME_VERSION, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-layout', THEME_URI . '/assets/css/layout.less', array(), EXTRA_THEME_VERSION, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-header', THEME_URI . '/assets/css/header.less', array(), EXTRA_THEME_VERSION, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-footer', THEME_URI . '/assets/css/footer.less', array(), EXTRA_THEME_VERSION, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-mobile-menu', THEME_URI . '/assets/css/mobile-menu.less', array(), EXTRA_THEME_VERSION, 'all' );
}
add_action('wp_enqueue_scripts', 'extra_theme_enqueue_styles', 5);