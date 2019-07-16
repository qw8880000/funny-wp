<?php
/**
 * Funny WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Funny_WP
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

function funnywp_scripts() {
    wp_enqueue_style( 'funnywp-style', get_stylesheet_uri() );
}

//add_action( 'wp_head', 'funnywp_add_scripts' );
add_action( 'wp_enqueue_scripts', 'funnywp_scripts' );

// This theme uses wp_nav_menu()
register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu', 'funnywp' ),
        'footer-menu' => __( 'Footer Menu', 'funnywp' )
    )
);
?>