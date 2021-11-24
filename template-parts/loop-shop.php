<!-- <div class="recom-article"> -->
<a href="<?php the_permalink(); ?>">
    <div class="recom-article-img">
        <?php
        //うどんの種類
        $cats = get_the_terms(get_the_ID(), 'shop_type');
        $taxonomy_name = '';
        if ($cats) {
            foreach ($cats as $cat) :
                $cat->slug;
                $taxonomy_name = $cat->slug;
            endforeach;
        }
        ?>

        <?php $img = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>
        <?php if (!empty($img)) { ?>
            <img src="<?php echo $img; ?>" alt="サムネイル画像です" />
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg">
        <?php } ?>

        <!-- <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="サムネイル画像です" /> -->

        <?php $category = array('なるちゅる', 'たらい', '本格派');
        //termに対応したインデックス配列を表示
        if ($taxonomy_name == 'naruchuru') {
            echo '<div class="recom-eye eye-naru">' . $category[0] . '</div>';
        } elseif ($taxonomy_name == 'tarai') {
            echo '<div class="recom-eye eye-tarai">' . $category[1] . '</div>';
        } elseif ($taxonomy_name == 'honkakuha') {
            echo '<div class="recom-eye eye-honkaku">' . $category[2] . '</div>';
        } ?>
    </div>
    <p class="recom-article-title"><?php the_title(); ?></p>
    <p class="recom-article-txt"><?php the_excerpt(); ?></p>
</a>
<!-- </div> -->
