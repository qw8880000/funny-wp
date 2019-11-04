<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Funny WP
 */
?>
<?php get_header(); ?>

<section id="main" class="main">
    <div class="main-content">
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'funnywp'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header><!-- .page-header -->

            <?php
            // Load posts loop.
            while ( have_posts() ):
                the_post();
                get_template_part( 'template-parts/content/content', 'excerpt' );
            endwhile;

            // Previous/next page navigation.
            funnywp_the_posts_navigation();
            ?>
        <?php else: ?>
            <?php
            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content/content', 'none' );
            ?>
        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
