<?php
/**
*
* @since Funny WP 1.0
*
* @param WP_Customize_Manager $wp_customize The Customizer object.
*/
function funnywp_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'funnywp_customize_settings', array(
        'title' => __( 'funnywp_customize_settings', 'funnywp' ),
    ) );

    $wp_customize->add_section( 'funnywp_post', array(
        'title'    => __( 'funnywp_post', 'funnywp' ),
        'panel' => 'funnywp_customize_settings',
    ) );

    $wp_customize->add_setting( 'funnywp_post_test', array(
        'default'           => 'default',
        'type' => 'theme_mod',
    ) );

    $wp_customize->add_control( 'funnywp_post_test', array(
        'label'    => __( 'Base Color Scheme', 'funnywp' ),
        'section'  => 'funnywp_post',
        'type'     => 'textarea',
    ) );
}

add_action( 'customize_register', 'funnywp_customize_register' );