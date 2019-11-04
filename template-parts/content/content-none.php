<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package Funny WP
 * @since 1.0.0
 */
?>

<section class="content-none-wrapper">
    <header class="content-none-header">
        <h1 class="content-none-title"><?php esc_html_e('Nothing Found', 'funnywp'); ?></h1>
    </header>
    <div>
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <?php printf(
                '<p>' . wp_kses(
                /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'funnywp'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
            ?>
        <?php elseif (is_search()): ?>

            <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'funnywp'); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'funnywp'); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?></div>

</section>
