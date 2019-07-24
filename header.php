<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header cd-header">
<!--        <div class="header-branding">
            <?php /*if ( has_custom_logo() ) : */?>
                <div class="header-logo"><?php /*the_custom_logo(); */?></div>
            <?php /*endif; */?>

            <p class="header-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
            <p class="header-description"><?php /*bloginfo( 'description' ); */?></p>
        </div>-->

        <!-- header navigation -->
        <nav class="header-nav cd-main-nav-wrapper">
                <?php
                wp_nav_menu(
                    array('container' => '',
                        'theme_location' => 'header-menu',
                        'menu_class'     => 'cd-main-nav',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
        </nav>
        <a href="#0" class="cd-nav-trigger"><span></span></a>
    </header>

