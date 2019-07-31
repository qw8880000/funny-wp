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
        <div class="header-branding-wrapper">
            <div class="header-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="header-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

                <div class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                <div class="header-description"><?php bloginfo( 'description' ); ?></div>
            </div>

            <div id="js-hamburger" class="hamburger hamburger--spin  header-btn-hamburger">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- header navigation -->
        <nav id="js-header-nav" class="header-nav">
            <?php
            wp_nav_menu(
                array('container' => '',
                    'theme_location' => 'header-nav',
                    'menu_class'     => 'header-nav-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav>

    </header>

