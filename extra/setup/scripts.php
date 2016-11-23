<?php
///////////////////////////////////////
//
//
// SCRIPTS
//
//
///////////////////////////////////////
function extra_theme_enqueue_scripts() {
	// FLUIDIVS
	wp_enqueue_script( 'fluidvids', THEME_URI . '/assets/js/fluidvids.min.js', array( 'jquery', 'extra' ), EXTRA_VERSION, true );
	// COMMON
	wp_enqueue_script('extra-common', THEME_URI.'/assets/js/common.js', array('jquery', 'extra'), EXTRA_VERSION, true);
	wp_localize_script( 'extra-common', 'extra_common_params', array(
		'theme_url' => get_stylesheet_directory_uri()
	));
}
add_action('wp_enqueue_scripts', 'extra_theme_enqueue_scripts');