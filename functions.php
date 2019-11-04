<?php
/**
 * Funny WP functions and definitions
 * Funny WP only works in WordPress 4.7 or later.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Funny WP
 * @since 1.0.0
 */


function funnywp_setup() {

    // Make theme available for translation.
    load_theme_textdomain( 'funnywp', get_template_directory() . '/languages' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}

add_action( 'after_setup_theme', 'funnywp_setup' );

/**
 *
 */
function funnywp_scripts() {
    // style.css
    wp_enqueue_style( 'funnywp-style', get_stylesheet_uri() );

    // iconfont
    wp_enqueue_style( 'funnywp-iconfont', get_template_directory_uri() . '/iconfont/iconfont.css' );

    // header nav
    wp_enqueue_script( 'funnywp-3th-transition-auto', get_template_directory_uri() . '/js/transition-auto.js', array(), '1.1', false );
    wp_enqueue_script( 'funnywp-header-nav', get_template_directory_uri() . '/js/header-nav.js', array('funnywp-3th-transition-auto'), '1.1', false );
}
//add_action( 'wp_head', 'funnywp_add_scripts' );
add_action( 'wp_enqueue_scripts', 'funnywp_scripts' );

/**
 * Header Navigation
 * This theme uses wp_nav_menu()
 */
register_nav_menus(
    array(
        'header-nav' => __( 'Header Nav', 'funnywp' ),
        'footer-nav' => __( 'Footer Nav', 'funnywp' )
    )
);

//function nav_item_css_class_filter( $classes, $item, $args, $depth ) {
function nav_item_css_class_filter( $classes ) {
    array_push( $classes, 'header-nav-menu-item' );
    return $classes;
}
add_filter( 'nav_menu_css_class', 'nav_item_css_class_filter' );

/**
 * Excerpt
 */
function funnywp_excerpt_more() {
    $link = sprintf( '<a href="%1$s" class="post-more-link">%2$s</a>',
        esc_url( get_permalink( get_the_ID() ) ),
        'read more'
    );
    return '......' . $link;
}
add_filter( 'excerpt_more', 'funnywp_excerpt_more' );

function funnywp_excerpt_length() {
    return 150;
}
add_filter( 'excerpt_length', 'funnywp_excerpt_length' );

/**
 * Sidebar
 */
register_sidebar( array(
    'name' => __( 'Sidebar widget area' ),
    'id' => 'sidebar-primary',
    'description' => __( 'Sidebar widget area' ),
    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="sidebar-widget-title">',
    'after_title' => '</h4>',
) );

//require get_template_directory() . '/inc/nav_walker.php';

/**
 * Pagination 分页
 * 参考：the_posts_pagination() 函数
 */
function funnywp_the_posts_navigation() {
    $result = '';
    $template = '<div class="pagination-wrapper" role="navigation"><ul class="pagination">%1$s</ul></div>';
    $links = paginate_links( array(
        'type' => 'array',
        'end_size' => 1,
        'mid_size' => 2,
        'prev_text' => '<span class="iconfont icon-arrow-left"></span>',
        'next_text' => '<span class="iconfont icon-arrow-right"></span>',
    ) );

    if ( $links ) {
        $page_items = '';

        foreach( $links as $k => $v ) {
            $page_items .= sprintf( '<li class="page-item">%1$s</li>', $v );
        }

        $result = sprintf( $template, $page_items );
    }

    echo $result;
}

/**
 * 上一篇文章，下一页文章
 * 参考： the_post_navigation() 函数
 */
function funnywp_the_post_navigation() {
    $result = '';
    $template = '
    <div class="post-navigation" role="navigation">
        <div class="post-navigation-prev">%1$s</div>
        <div class="post-navigation-next">%2$s</div>
    </div>';

    $previous = get_previous_post_link( '%link', '<span class="iconfont icon-arrow-left"></span> %title' );
    $next = get_next_post_link( '%link', '%title  <span class="iconfont icon-arrow-right"></span>' );

    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $result = sprintf( $template, $previous, $next );
    }

    echo $result;
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

?>