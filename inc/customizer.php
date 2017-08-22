<?php
/**
 * SBD Base Theme Customizer
 *
 * @package SBD_Base
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sbd_base_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'sbd_base_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sbd_base_customize_preview_js() {
	wp_enqueue_script( 'sbd_base_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sbd_base_customize_preview_js' );





function sbd_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'sbd_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sbd_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'sbd' ),
        'section'  => 'title_tagline',
        'settings' => 'sbd_logo',
    ) ) );
}
add_action( 'customize_register', 'sbd_customize_register' );