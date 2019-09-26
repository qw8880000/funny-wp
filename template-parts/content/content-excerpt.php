<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="post-title">
        <?php printf( '<a href="%1$s">%2$s</a>',
            esc_url( get_permalink( get_the_ID() ) ),
            the_title( '', '', false )
        ); ?>
    </h1>

    <?php get_template_part( 'template-parts/post-meta' ); ?>

    <div class="post-content"><?php the_excerpt(); ?></div>

</article>