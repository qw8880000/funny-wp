<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>

    <?php get_template_part( 'template-parts/post-meta' ); ?>

    <div class="post-content"><?php the_content(); ?></div>

</article>