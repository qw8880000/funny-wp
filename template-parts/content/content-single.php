<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>

    <div class="post-meta">
        <?php if ( has_tag() ) : ?>
            <div class="post-tags">
                <span class="iconfont icontag"></span>
                <?php the_tags(''); ?>
            </div>
        <?php endif ?>

        <?php if ( has_category() ) : ?>
            <div class="post-categories">
                <span class="iconfont iconbook-mark"></span>
                <?php the_category(', ', '', $post_id=get_the_ID()); ?>
            </div>
        <?php endif ?>

        <div class="post-create_time">
            <span class="iconfont iconrili"></span>
            <?php /*the_time('Y-m-d H:i:s'); */?>
            <?php the_time('Y-m-d'); ?>
        </div>
    </div>

    <div class="post-content"><?php the_content(); ?></div>

</article>