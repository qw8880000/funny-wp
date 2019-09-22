<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Funny_WP
 * @since 1.0.0
 */
?>

<section class="content-none-wrapper">
    <?php if (is_search()): ?>

        <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
        <?php get_search_form(); ?>

    <?php else : ?>

        <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.'); ?></p>

    <?php endif; ?>
</section>
