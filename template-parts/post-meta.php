<div class="post-meta">
    <?php if ( has_tag() ) : ?>
        <div class="post-tags">
            <span class="iconfont icon-tag"></span>
            <?php the_tags(''); ?>
        </div>
    <?php endif ?>

    <?php if ( has_category() ) : ?>
        <div class="post-categories">
            <span class="iconfont icon-book-mark"></span>
            <?php the_category(', ', '', $post_id=get_the_ID()); ?>
        </div>
    <?php endif ?>

    <div class="post-create-time">
        <span class="iconfont icon-calendar"></span>
        <?php /*the_time('Y-m-d H:i:s'); */?>
        <?php the_time('Y-m-d'); ?>
    </div>
</div>