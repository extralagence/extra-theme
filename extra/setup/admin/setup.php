<?php
/**********************
 *
 *
 *
 * TINY MCE
 *
 *
 *
 *********************/
function _blank_tinymce( $init ) {
	if ( array_key_exists( 'style_formats', $init ) ) {
		$style_formats = json_decode( $init['style_formats'] );
	} else {
		$style_formats = array();
	}
	$style_formats         = array_merge( $style_formats, array(
		array(
			'title'    => 'Lien bouton',
			'selector' => 'a',
			'classes'  => 'link-button'
		),
		array(
			'title'    => 'Lien important',
			'selector' => 'a',
			'classes'  => 'link-important'
		),
		array(
			'title'   => 'Chapô',
			'block'   => 'div',
			'classes' => 'chapo',
			'wrapper' => true
		),
		array(
			'title'    => 'Titre avec bordure',
			'selector' => 'h1, h2, h3, h4',
			'classes'  => 'border-title'
		)
	) );
	$init['style_formats'] = json_encode( $style_formats );

	return $init;
}

add_filter( 'tiny_mce_before_init', '_blank_tinymce' );