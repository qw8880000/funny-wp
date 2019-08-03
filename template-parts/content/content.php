<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
the_title( '<h1 class="post-title">', '</h1>' );
//the_content(
//    sprintf(
//        wp_kses(
//            /* translators: %s: Name of current post. Only visible to screen readers */
//            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
//            array(
//                'span' => array(
//                    'class' => array(),
//                ),
//            )
//        ),
//        get_the_title()
//    )
//);

//wp_link_pages(
//    array(
//        'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
//        'after'  => '</div>',
//    )
//);
?>
<div class="post-content">
    <?php the_excerpt(); ?>
</div>

</article>