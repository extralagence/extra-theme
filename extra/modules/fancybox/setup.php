<?php
///////////////////////////////////////
//
//
// SCRIPTS
//
//
///////////////////////////////////////
function extra_fancybox_custom__enqueue_scripts() {
	// STYLE
	wp_enqueue_style( 'extra-fancybox-custom', THEME_MODULES_URI . '/fancybox/css/fancybox.less', array(), false, 'all' );
	// SCRIPT
	wp_enqueue_script( 'extra-fancybox-custom', THEME_MODULES_URI . '/fancybox/js/fancybox.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'extra_fancybox_custom__enqueue_scripts' );