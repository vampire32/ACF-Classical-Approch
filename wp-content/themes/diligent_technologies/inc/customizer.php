<?php
/**
 * diligent_technologies Theme Customizer
 *
 * @package diligent_technologies
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
//function diligent_technologies_customize_register( $wp_customize ) {
//    // Add settings for primary color
//    $wp_customize->add_setting( 'primary_color', array(
//        'default'           => '#007bff',
//        'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    // Add settings for secondary color
//    $wp_customize->add_setting( 'secondary_color', array(
//        'default'           => '#6c757d',
//        'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//    $wp_customize->add_setting( 'CTA_Button_Color', array(
//        'default'           => '#6c757d',
//        'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    // Add settings for header background color
//    $wp_customize->add_setting( 'header_bg_color', array(
//        'default'           => '#ffffff',
//        'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    // Add controls for primary color
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
//        'label'    => __( 'Primary Color', 'diligent_technologies' ),
//        'section'  => 'colors',
//        'settings' => 'primary_color',
//    ) ) );
//
//    // Add controls for secondary color
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
//        'label'    => __( 'Secondary Color', 'diligent_technologies' ),
//        'section'  => 'colors',
//        'settings' => 'secondary_color',
//    ) ) );
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'CTA_Button_Color', array(
//        'label'    => __( 'CTA Button Color', 'diligent_technologies' ),
//        'section'  => 'colors',
//        'settings' => 'CTA_Button_Color',
//    ) ) );
//
//    // Add controls for header background color
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
//        'label'    => __( 'Header Background Color', 'diligent_technologies' ),
//        'section'  => 'colors',
//        'settings' => 'header_bg_color',
//    ) ) );
//
//    // Add more settings and controls as needed
//}
//add_action( 'customize_register', 'diligent_technologies_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function diligent_technologies_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function diligent_technologies_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function diligent_technologies_customize_preview_js() {
	wp_enqueue_script( 'diligent_technologies-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'diligent_technologies_customize_preview_js' );
