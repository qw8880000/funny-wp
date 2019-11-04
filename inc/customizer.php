<?php
/**
*
* @since Funny WP 1.0
*
* @param WP_Customize_Manager $wp_customize The Customizer object.
*/
function funnywp_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'funnywp_customize_settings', array(
        'title' => __( 'Funny WP Customize Settings', 'funnywp' ),
    ) );

    $wp_customize->add_section( 'funnywp_post_settings', array(
        'title'    => __( 'Funny WP Post Settings', 'funnywp' ),
        'panel' => 'funnywp_customize_settings',
    ) );
    
    $wp_customize->add_setting( 'post_copyright', array(
        'default' => 'default',
        'type' => 'theme_mod',
    ) );
    $wp_customize->add_control( 'post_copyright', array(
        'label'    => esc_html__( 'Post Copyright', 'funnywp' ),
        'section'  => 'funnywp_post_settings',
        'type'     => 'textarea',
    ) );
}

add_action( 'customize_register', 'funnywp_customize_register' );