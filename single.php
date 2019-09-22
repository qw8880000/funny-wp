<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Funny_WP
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<section id="main" class="main">
    <div class="main-content">
        <?php
        // Load posts loop.
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content/content', 'single');
        }
        ?>

        <?php funnywp_the_post_navigation(); ?>
    </div>

    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
