<?php
///////////////////////////////////////
//
//
// THEME VERSION
//
//
///////////////////////////////////////
define('EXTRA_THEME_VERSION', '1.0.0');
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
	$vars['highlight'] = '#0000FF';
	return $vars;
}
add_filter('less_vars', 'extra_theme_less_vars', 10, 2);
///////////////////////////////////////
//
//
// RESPONSIVE SIZES
//
//
///////////////////////////////////////
function extra_custom_responsive_sizes( $sizes ) {
	$sizes = array(
		'desktop'       => 'only screen and (min-width: 1221px)',
		'tablet'        => 'only screen and (max-width: 1220px) and (min-width: 691px)',
		'mobile'        => 'only screen and (max-width: 690px)'
	);

	return $sizes;
}

add_filter( 'extra_responsive_sizes', 'extra_custom_responsive_sizes', 10, 1 );
function extra_custom_size_rules( $rules ) {
	return array(
		'desktop'       => 1220,
		'tablet'        => 960,
		'mobile'        => 690
	);
}

add_filter( 'extra_responsive_size_rules', 'extra_custom_size_rules', 10, 1 );
function extra_custom_content_size_rules( $rules ) {
	return array(
		'desktop'       => 1220,
		'tablet'        => 960,
		'mobile'        => 690
	);
}

add_filter( 'extra_responsive_content_size_rules', 'extra_custom_content_size_rules', 10, 1 );
function extra_responsive_small_width_limit() {
	return 1220;
}
add_filter('extra_responsive_small_width_limit', 'extra_responsive_small_width_limit');
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
///////////////////////////////////////
//
//
// SEARCH FORM
//
//
///////////////////////////////////////
function extra_search_form( $form ) {
	$form = '
    	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    		<label for="s">' . __( "Une recherche ?", "extra" ) . '</label>
    		<input type="text" value="' . get_search_query() . '" name="s" id="s" />
    		<button type="submit" id="searchsubmit">' . __( 'Valider', 'extra' ) . '</button>
    		<button type="button" class="close"></button>
    	</form>
    	';

	return $form;
}