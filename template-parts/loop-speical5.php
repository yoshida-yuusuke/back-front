<!-- <article class="news"> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('news5'); ?>>
    <div class="news_pic">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg.png" alt="">
            <?php endif; ?>
        </a>
    </div>
    <div class="news_meta">
        <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?>
        </time>
    </div>
    <!-- <h2 class=" news_title"><a href="#">タイトルタイトルタイトル</a></h2> -->
    <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class=" news_desc">
        <!-- <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
        <p><a href="#">[続きを読む]</a></p> -->
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>
