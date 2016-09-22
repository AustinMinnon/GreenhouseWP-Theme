<?php
/**
 * greenhouse Theme Customizer.
 *
 * @package greenhouse
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function greenhouse_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'business_settings', array(
	        'title'          => 'Business Information',
	        'priority'       => 35,
	    ) );

		$wp_customize->add_setting( 'business_name', array(
			'default'        => '',
		) );

		$wp_customize->add_control( 'business_name', array(
			'label'   => 'Business Name',
			'section' => 'business_settings',
			'type'    => 'text',
		) );

	    $wp_customize->add_setting( 'business_phone', array(
	        'default'        => '',
	    ) );

	    $wp_customize->add_control( 'business_phone', array(
	        'label'   => 'Business Phone',
	        'section' => 'business_settings',
	        'type'    => 'text',
	    ) );

		$wp_customize->add_setting( 'business_address', array(
			'default'        => '',

		) );

		$wp_customize->add_control( 'business_address', array(
			'label'   => 'Business Address',
			'section' => 'business_settings',
			'description'	=> 'Example: 1 Front St. Orlando, FL 02983',
			'type'    => 'text',
		) );

		$wp_customize->add_setting( 'business_facebook', array(
			'default'        => 'facebook.com/business',
		) );

		$wp_customize->add_control( 'business_facebook', array(
			'label'   => 'Business Facebook Page',
			'section' => 'business_settings',
			'type'    => 'text',
		) );

		$wp_customize->add_setting( 'business_directions', array(
			'default'        => 'default',
		) );

		$wp_customize->add_control( 'business_directions', array(
			'label'   => 'URL/Link to directions',
			'section' => 'business_settings',
			'type'    => 'text',
		) );

}
add_action( 'customize_register', 'greenhouse_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function greenhouse_customize_preview_js() {
	wp_enqueue_script( 'greenhouse_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'greenhouse_customize_preview_js' );
