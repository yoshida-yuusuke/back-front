<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="main">
    <!-- ---------------------------------------------
-------以下に各ページのマークアップをお願いします。-------
--------------------------------------------------->

<?php
//ユーザーがお気に入りにした記事のIDを取得 
//Cookieからお気に入り登録した投稿のIDを取得
$cookie_arr = $_COOKIE['wp-favorite-posts'];
$favorite_post_ids = array();
if( is_array($cookie_arr) ){
    foreach ($cookie_arr as $i => $cookie_item) :
        array_push($favorite_post_ids, $i);
    endforeach;
}
?>
<?php //$favorite_post_ids = wpfp_get_user_meta(); ?>

    <!--------------------
          トップの画像
        --------------------->
    <div class="page-header">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_page-favorite.jpg" alt="お気に入り記事一覧のイメージ画像です" class="page-header-img" />
        <div class="page-header-txt-wrap">
            <h2 class="h2-font top-img-title">
                徳島で見つける、あなた好みのうどん。
            </h2>
        </div>
    </div>

    <section class="recom-wrap favo-bgcolor">
        <div class="recom-title">
            <h2 class="h2-font">あなたのお気に入り記事</h2>
        </div>

<?php if( empty($favorite_post_ids) ){?>
    <p>お気に入りが登録されていません</p><br><br>
<?php } else {?>

        <?php
        //メニューの投稿タイプ
        //taxonomyの取得

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        //ユーザーがお気に入りにした店舗紹介記事のIDを取得
        $args = array(
            'post_type' => array('shop', 'post'),   //店舗と特集記事
            'paged' => $paged,
            // ページネーションを受け取る？
            'post__in' => $favorite_post_ids,       //お気に入り記事のID
        );

        // 記事の取得
        $the_query = new WP_Query($args);

        $fav_count = (is_null($the_query->found_posts) || empty($the_query->found_posts) ? 0 : $the_query->found_posts);
        if( $fav_count == 0 ) :?>
            <p>お気に入りが登録されていません</p><br><br>
        <?php else: ?>
            <p><?php echo $fav_count; ?>件の記事をお気に入りしました。</p><br><br>
        <?php endif; ?> 

        <?php if ($the_query->have_posts()) :
            $count = 0;
        ?>
            <div class="recom-cont">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $count++;
                ?>
                    <div class="recom-article">
                        <?php get_template_part('template-parts/loop', 'shop'); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : 'お気に入りが登録されていません'; ?>
        <?php endif; ?>


        <!----------------------
        ページネーション
        ---------------------->
        <div class="pagenation-wrap">
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $the_query));
            }
            ?>
        </div>

<?php } ?>

    </section>


</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
