<?php
/**********************
 *
 *
 *
 * JAVASCRIPTS
 *
 *
 *
 *********************/
function extra_theme_enqueue_scripts() {
	// MODERNIZR
	wp_enqueue_script('modernizr', THEME_URI.'/assets/js/lib/modernizr.custom.js', array('jquery'), null, true);
	// COMMON
	wp_enqueue_script('extra-common', THEME_URI.'/assets/js/common.js', array('jquery', 'extra'), null, true);
}
add_action('wp_enqueue_scripts', 'extra_theme_enqueue_scripts');