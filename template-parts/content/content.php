
<?php
the_title( '<h1 class="entry-title">', '</h1>' );

the_excerpt();
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
