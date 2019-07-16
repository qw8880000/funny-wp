<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="header-branding">
        <?php if ( has_custom_logo() ) : ?>
            <div class="header-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>

        <p class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <p class="header-description"><?php bloginfo( 'description' ); ?></p>
    </div>

    <nav id="header-navigation" class="header-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'funnywp' ); ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header-menu',
                'menu_class'     => 'header-menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            )
        );
        ?>
    </nav>
</header>

