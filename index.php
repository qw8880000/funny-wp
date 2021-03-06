<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Funny WP
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<section id="main" class="main">
    <div class="main-content">
        <?php if ( have_posts() ): ?>

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
