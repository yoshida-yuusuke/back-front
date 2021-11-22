<!-- <div class="archive-article"> -->
<a href="<?php the_permalink(); ?>">
    <div class="archive-article-img">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-spe.jpg" alt="記事のサムネイル画像です" class="thumb-radius">
        <?php endif; ?>
    </div>
    <p class="article-title"><?php the_title(); ?></p>
    <p class="article-txt"><?php the_excerpt(); ?></p>
</a>
<!-- </div> -->
