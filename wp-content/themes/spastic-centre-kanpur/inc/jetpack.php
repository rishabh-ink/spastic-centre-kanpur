<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package spastic-centre-kanpur
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function spastic_centre_kanpur_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'spastic_centre_kanpur_infinite_scroll_setup' );
