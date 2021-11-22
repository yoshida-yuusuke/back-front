<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- パンくずリスト -->

<div class="pkz">
    <ul class="pkz-ul">
        <li> <?php get_template_part('template-parts/breadcrumb'); ?></li>
    </ul>
</div>

<main class="main">
    <!-- ---------------------------------------------
-------以下に各ページのマークアップをお願いします。-------
--------------------------------------------------->
    <!--------------------
          トップの画像
        --------------------->
    <div class="page-header">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_page-favorite.jpg" alt="お気に入り記事一覧のイメージ画像です" class="page-header-img" />
        <div class="page-header-txt-wrap page-header-txt-wrap-favorite">
            <h2 class="h2-font top-img-title favorite-catchcopy">
                徳島で見つける、<br />
                あなた好みのうどん。
            </h2>
        </div>
    </div>

    <section class="archive-wrap">
        <div class="favorite-title">
            <h2 class="h2-font">あなたのお気に入り記事</h2>
            <p>20件の記事をお気に入りしました。</p>
        </div>
        <div class="archive-list">
            <?php
            //ユーザーがお気に入りにした記事のIDを取得
            $favorite_post_ids = wpfp_get_user_meta();

            $args = array(
                'post_type' => 'shop',
                'post__in' => $favorite_post_ids, //お気に入り記事のID
            );
            // 記事の取得
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                $count = 0;
            ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++;
                ?>
                    <!-- 5番目だったら、archive-article-bigのクラスを付与する -->
                    <div class="archive-article<?php if ($count % 5 == 0) echo " archive-article-big"; ?>">
                        <div class="archive-article-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="記事のサムネイル画像です" />
                                $terms = get_the_terms(get_the_ID(), 'shop_type');

                                <!-- if ($terms == 'naruchuru') {
                                    echo '<div class="article-eye naruto">' . $category[0] . '</div>';
                                } elseif ($taxonomy_name == 'tarai') {
                                    echo '<div class="article-eye tarai">' . $category[1] . '</div>';
                                } else {
                                    echo '<div class="article-eye honkaku">' . $category[2] . '</div>';
                                } ?> -->
                                <div class="article-eye honkaku">本格うどん</div>
                            </a>
                            <button class="article-good">❤︎</button>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="article-link">
                            <p class="article-title"><?php the_title(); ?></p>
                            <p class="article-txt"><?php the_excerpt(); ?></p>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                echo '登録がありません';
            <?php endif ?>

            <?php wp_reset_postdata();
            ?>
    </section>
    <!----------------------
         ページネーション
        ---------------------->
    <div class="pagenation-wrap">
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $the_query));
        } ?>
        <!-- <ul class="pagenation">
			<li class="pagenation-number">1</li>
			<li class="pagenation-number">2</li>
			<li class="pagenation-number">3</li>
			<li class="pagenation-number">4</li>
			</ul> -->

    </div>
    </div>

</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
