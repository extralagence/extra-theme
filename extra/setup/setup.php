<?php
///////////////////////////////////////
//
//
// THEME SETUP
//
//
///////////////////////////////////////
if ( ! function_exists( 'extra_setup' ) ) {
	function extra_setup() {
		// LANGUAGE
//		load_theme_textdomain('extra', get_template_directory().'/includes/lang');

		// DEFAULT POST THUMBNAIL SIZE
		add_theme_support('post-thumbnails');

		// AUTO RSS
//		add_theme_support( 'automatic-feed-links' );

		// HTML 5
		add_theme_support( 'html5' );

		$default_nav_menus = array(
			'main' => 'Principale',
			'mobile' => 'Mobile',
			'footer' => 'Pied de page'
		);

		// NAVIGATION MENUS
		register_nav_menus(apply_filters('extra_default_nav_menus', $default_nav_menus));

		global $content_width;
		$content_width = apply_filters('extra_content_width', 940);

		add_editor_style('extra/assets/css/editor-style.less');
	}
}
add_action('after_setup_theme', 'extra_setup');
///////////////////////////////////////
//
//
// LESS
//
//
///////////////////////////////////////
function extra_theme_less_vars($vars, $handle) {
	$vars['font'] = 'arial, sans-serif';
	$vars['white'] = '#ffffff';
	$vars['black'] = '#000000';
	$vars['dark'] = '#333333';
	$vars['grey'] = '#999999';
	$vars['lightgrey'] = '#dddddd';
	$vars['green'] = '#689074';
	$vars['highlight'] = '#e2424b';
	return $vars;
}
add_filter('less_vars', 'extra_theme_less_vars', 10, 2);
///////////////////////////////////////
//
//
// ADMIN BAR WEIRD MARGINS
//
//
///////////////////////////////////////
function my_admin_bar_init() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('admin_bar_init', 'my_admin_bar_init');
///////////////////////////////////////
//
//
// CUSTOM RESPONSIVE
//
//
///////////////////////////////////////
function extra_custom_responsive_sizes($sizes) {
	$sizes = array(
		'desktop' => 'only screen and (min-width: 961px)',
		'tablet' => 'only screen and (min-width: 691px) and (max-width: 960px)',
		'mobile' => 'only screen and (max-width: 690px)'
	);

	return $sizes;
}
add_filter('extra_responsive_sizes', 'extra_custom_responsive_sizes', 10, 1);
///////////////////////////////////////
//
//
// TYPEKIT ID
//
//
///////////////////////////////////////
add_filter('extra_admin_typekit_id', function(){
	return 'xxxxxxx';
});