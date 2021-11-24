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

    <section class="recom-wrap">
        <div class="recom-title">
            <h2 class="h2-font">あなたのお気に入り記事</h2>
            <p>20件の記事をお気に入りしました。</p>
        </div>
        <div class="recom-cont">

            <?php
            //メニューの投稿タイプ
            //taxonomyの取得

            //ユーザーがお気に入りにした記事のIDを取得
            $favorite_post_ids = wpfp_get_user_meta();

            //ユーザーがお気に入りにした店舗紹介記事のIDを取得
            $args = array(
                'post_type' => array('shop', 'post'),   //店舗と特集記事
                'post__in' => $favorite_post_ids,       //お気に入り記事のID
            );

            // 記事の取得
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                $count = 0;
            ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++;
                ?>
                    <div class="recom-article">
                        <?php get_template_part('template-parts/loop', 'shop'); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : '検索結果がありませんでした'; ?>
            <?php endif; ?>
        </div>
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
