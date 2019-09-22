<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
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
            <?php if (have_posts()): ?>

                <div class="archive-header">
                    <?php
                    the_archive_title('<h1 class="archive-title">', '</h1>');
                    the_archive_description('<div class="archive-taxonomy-description">', '</div>');
                    ?>
                </div>

                <?php
                // Load posts loop.
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/content/content', 'excerpt');
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