<?php
/**
 * spastic-centre-kanpur Theme Customizer
 *
 * @package spastic-centre-kanpur
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function spastic_centre_kanpur_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'spastic_centre_kanpur_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function spastic_centre_kanpur_customize_preview_js() {
	wp_enqueue_script( 'spastic_centre_kanpur_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'spastic_centre_kanpur_customize_preview_js' );
