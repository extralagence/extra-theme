<?php
///////////////////////////////////////
//
//
// ADD OPTIONS
//
//
///////////////////////////////////////
add_filter( 'extra_default_global_options_section', function ( $sections ) {
	array_unshift( $sections, array(
		'icon'   => 'el-icon-facebook',
		'title'  => "Réseaux sociaux",
		'desc'   => null,
		'fields' => array(
			array(
				'id'    => 'facebook-url',
				'type'  => 'text',
				'title' => "Adresse de la page facebook"
			),
			array(
				'id'    => 'twitter-url',
				'type'  => 'text',
				'title' => "Adresse du compte Twitter"
			),
			array(
				'id'    => 'instagram-url',
				'type'  => 'text',
				'title' => "Adresse du compte Instagram"
			),
			array(
				'id'    => 'youtube-url',
				'type'  => 'text',
				'title' => "Adresse de la page YouTube"
			)
		)
	) );

	return $sections;
}, 50 );
///////////////////////////////////////
//
//
// TINY MCE
//
//
///////////////////////////////////////
function extra_theme_tinymce( $init ) {
	if ( array_key_exists( 'style_formats', $init ) ) {
		$style_formats = json_decode( $init['style_formats'] );
	} else {
		$style_formats = array();
	}
	$style_formats         = array_merge( $style_formats, array(
		array(
			'title'    => 'Lien important',
			'selector' => 'a',
			'classes'  => 'link-important'
		),
		array(
			'title'    => 'Bouton',
			'selector' => 'a',
			'classes'  => 'link-button'
		),
		array(
			'title'   => 'Chapô',
			'block'   => 'div',
			'classes' => 'chapo',
			'wrapper' => true
		),
		array(
			'title'   => 'Texte en couleur',
			'inline'  => 'span',
			'classes' => 'color'
		),
		array(
			'title'   => 'Auteur',
			'inline'  => 'span',
			'classes' => 'author'
		),
		array(
			'title'   => 'Source',
			'block'   => 'div',
			'classes' => 'source',
			'wrapper' => true
		),
		array(
			'title'   => 'Mise en avant',
			'block'   => 'div',
			'classes' => 'push',
			'wrapper' => true
		),
		array(
			'title'   => 'Indentation',
			'block'   => 'div',
			'classes' => 'indent',
			'wrapper' => true
		)
	) );
	$init['style_formats'] = json_encode( $style_formats );

	return $init;
}

add_filter( 'tiny_mce_before_init', 'extra_theme_tinymce' );
///////////////////////////////////////
//
//
// TINY MCE SEPARATOR
//
//
///////////////////////////////////////
function extra_page_tinymce_buttons( $plugin_array ) {
	$plugin_array['extraAltSeparator'] = THEME_COMMON_MODULE_URI . '/admin/js/alt-separator.js';

	return $plugin_array;
}

function extra_add_page_tinymce_plugins() {
	if ( is_admin() ) {
		add_filter( "mce_external_plugins", "extra_page_tinymce_buttons" );
	}
}

add_action( 'init', 'extra_add_page_tinymce_plugins' );
add_filter( 'extra_tinymce_toolbar1', 'extra_theme_tinymce_toolbar1' );
function extra_theme_tinymce_toolbar1( $toolbar ) {
	return 'formatselect,styleselect,alignleft,aligncenter,alignright,bold,italic,link,unlink,separator,outdent,indent,blockquote,quote,hr,extra_alt_separator,extra_cleaner,separator,charmap,separator,bullist,numlist,removeformat';
}