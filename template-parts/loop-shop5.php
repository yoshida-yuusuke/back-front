<section id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <a href="<?php the_permalink(); ?>">
        <figure class="menu_pic">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg" alt="">
            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?php the_title(); ?></h3>
        <p class="menu_price">800円</p>
        <div class="menu_desc">
            <?php the_excerpt(); ?>
        </div>
    </a>
</section>
