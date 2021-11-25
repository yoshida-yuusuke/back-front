<?php get_header(); ?>

<!-- 検索条件の変数指定 -->
<?php $analyze = true; ?>

<!-- 送信後の検索結果を作る -->

<?php
//送信で送られてきた、検索条件で選択された「種類」と「地域」の値（スラッグ）を取得する
$shop_type_slug = (isset($_POST["shop_type"]) && $_POST["shop_type"] != "" ? $_POST["shop_type"] : "");
$shop_area_slug = (isset($_POST["shop_area"]) && $_POST["shop_area"] != "" ? $_POST["shop_area"] : "");
// 新たに引っ張ってきた変数
$get_tags
    = (!empty($_POST["shop_tag"]) ? $_POST["shop_tag"] : "");
// $shop_tag_slug[] = ($_POST["shop_tag"] != "" ? $_POST["shop_tag"] : "");

//スラッグからカテゴリー（タクソノミー）の名前を取得する
if ($shop_type_slug != "") {
    $shop_type_name = get_term_by('slug', $shop_type_slug, 'shop_type')->name;
}
if ($shop_area_slug != "") {
    $shop_area_name = get_term_by('slug', $shop_area_slug, 'shop_area')->name;
}
// 検索の変数指定
$do_search = true;
?>

<!-- ★★ここから追加★★ -->
<!------- メイン ------->
<main class="main">
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!--------------------
		トップの画像
	--------------------->
    <div class="page-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_page-favorite.jpg" alt="検索結果のイメージ画像です" class="page-header-img" />
        <div class="page-header-txt-wrap">
            <h2 class="h2-font top-img-title ">
                徳島で見つける、あなた好みのうどん。
            </h2>
        </div>
    </div>
    <!-- ★★ここまで追加★★ -->

    <?php
    $str_cond = "";
    if ($shop_type_slug != "") {
        //前の画面で選択されていたうどんの種類を表示
        //送られてきた店舗名はいつもひとつだけなのか？
        $str_cond = $str_cond . "<b>種類：</b>" . $shop_type_name . "&nbsp;";
    }
    if ($shop_area_slug != "") {
        //前の画面で選択されていた地域を表示
        //送られてきたエリア名はいつもひとつだけなのか？
        $str_cond = $str_cond . "<b>地域：</b>" . $shop_area_name . "&nbsp;";
    }
    if (is_array($get_tags)) {
        $str_cond = $str_cond . '<b>タグ：</b>';
        foreach ($get_tags as $value) {
            $s_term = get_term_by('slug', $value, 'shop_tag');
            $str_cond = $str_cond . $s_term->name . ",";
        }
    }
    ?>

    <?php
    //ここから検索のパラメーターを準備する

    //A. 種類と地域の両方が選択されている場合
    // if文の追加、各セクターごとに条件分岐を作る。下に追加しているがそれの読み解き
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if ($get_tags) {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる
            'paged' => $paged,

            //タクソノミー「shop_type」と「shop_area」のAND検索
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'shop_type',
                    'field' => 'slug',
                    'terms' => $shop_type_slug //検索条件で選択された「種類」
                ),
                array(
                    'taxonomy' => 'shop_area',
                    'field' => 'slug',
                    'terms' => $shop_area_slug //検索条件で選択された「地域」
                ),
                array(
                    'taxonomy' => 'shop_tag',
                    'field' => 'slug',
                    'terms' => $get_tags,
                    'operator' => 'IN'
                ),
            )
        );
    } else {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる
            'paged' => $paged,

            //タクソノミー「shop_type」と「shop_area」のAND検索
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'shop_type',
                    'field' => 'slug',
                    'terms' => $shop_type_slug //検索条件で選択された「種類」
                ),
                array(
                    'taxonomy' => 'shop_area',
                    'field' => 'slug',
                    'terms' => $shop_area_slug //検索条件で選択された「地域」
                ),
            )
        );
    }



    //B. 種類だけ選択されている場合
    // ここのif文の意味？
    if ($shop_type_slug != "" && $shop_area_slug === "") {
        // if文の追加、各セクターごとに条件分岐を作る。下に追加しているがそれの読み解き
        if ($get_tags) {
            $args = array(
                'post_type' => 'shop', //カスタム投稿「shop」
                'post_status' => 'publish', //公開された投稿のみ
                'orderby' =>  'date', //日付の順に並べる
                'order' =>  'DESC', //降順に並べる
                'paged' => $paged,

                //タクソノミー「shop_type」の検索
                'tax_query' => array(
                    // ?
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'shop_type',
                        'field' => 'slug',
                        'terms' => $shop_type_slug //検索条件で選択された「種類」
                    ),
                    // タグの指定
                    array(
                        'taxonomy' => 'shop_tag',
                        'field' => 'slug',
                        'terms' => $get_tags,
                        'operator' => 'IN'
                    )
                )
            );
        } else {
            $args = array(
                'post_type' => 'shop', //カスタム投稿「shop」
                'post_status' => 'publish', //公開された投稿のみ
                'orderby' =>  'date', //日付の順に並べる
                'order' =>  'DESC', //降順に並べる
                'paged' => $paged,

                //タクソノミー「shop_type」の検索
                'tax_query' => array(
                    // ?
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'shop_type',
                        'field' => 'slug',
                        'terms' => $shop_type_slug //検索条件で選択された「種類」
                    )
                )
            );
        }
    }
    //C. 地域だけ選択されている
    if ($shop_type_slug === "" && $shop_area_slug != "") {
        // if文の追加、各セクターごとに条件分岐を作る。下に追加しているがそれの読み解き
        if ($get_tags) {
            $args = array(
                'post_type' => 'shop', //カスタム投稿「shop」
                'post_status' => 'publish', //公開された投稿のみ
                'orderby' =>  'date', //日付の順に並べる
                'order' =>  'DESC', //降順に並べる
                'paged' => $paged,

                //タクソノミー「shop_area」の検索
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'shop_area',
                        'field' => 'slug',
                        'terms' => $shop_area_slug //検索条件で選択された「地域」
                    )
                ),
                array(
                    'taxonomy' => 'shop_tag',
                    'field' => 'slug',
                    'terms' => $get_tags,
                    'operator' => 'IN'
                )
            );
        } else {
            $args = array(
                'post_type' => 'shop', //カスタム投稿「shop」
                'post_status' => 'publish', //公開された投稿のみ
                'orderby' =>  'date', //日付の順に並べる
                'order' =>  'DESC', //降順に並べる
                'paged' => $paged,

                //タクソノミー「shop_area」の検索
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_area',
                        'field' => 'slug',
                        'terms' => $shop_area_slug //検索条件で選択された「地域」
                    )

                )
            );
        }
    }
    //D. 両方選択されていない
    if ($shop_type_slug === "" && $shop_area_slug === "") {
        // if文の追加、各セクターごとに条件分岐を作る。下に追加しているがそれの読み解き
        if ($get_tags) {
            $args = array(
                'post_type' => 'shop', //カスタム投稿「shop」
                'post_status' => 'publish', //公開された投稿のみ
                'orderby' =>  'date', //日付の順に並べる
                'order' =>  'DESC', //降順に並べる
                'paged' => $paged,

                //タグ「shop_tag」の検索
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_tag',
                        'field' => 'slug',
                        'terms' => $get_tags,
                        'operator' => 'IN'
                    )
                )
            );
        } else {
            $do_search = false;
        }
    }
    ?>


    <section class="recom-wrap favo-bgcolor">
        <div class="recom-title">
            <h2 class="h2-font">検索結果</h2>
        </div>
        <p><b>指定した条件</b><br><?php echo $str_cond; ?></p><br>

        <?php
        //検索実行
        if ($do_search) { ?>

            <?php
            // 記事の取得
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
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

                </div>


                <!----------------------
                ページネーション
                ---------------------->
                <?php if (function_exists('wp_pagenavi')) { ?>
                    <div class="pagenation-wrap">
                        <?php if ($analyze == true) {
                            wp_pagenavi(array('query' => $the_query));
                        } ?>
                    </div>
                <?php } ?>


                <?php wp_reset_postdata(); ?>
            <?php else : echo '<p>検索結果がありませんでした</p>'; ?>
                <?php $analyze = false; ?>
            <?php endif; ?>


        <?php } else {
            echo "<p>検索条件が指定されていません。</p>";
            // 検索条件が指定されてない場合の変数代入
            $analyze = false;
        }
        ?>
    </section>

</main>


<?php if ($analyze == false) : ?>

    <!----------------------
       ----- おすすめ記事-----
    ------------------------->
    <!-- おすすめrecom -->
    <section class="recom-wrap shop-recom">
        <div class="recom-title">
            <h2 class="recom-title-p">こちらの記事もおすすめです</h2>
        </div>
        <div class="recom-cont">

            <?php
            $args_rand = array(
                'post_type' => 'shop',
                'orderby' => 'rand',
                'posts_per_page' => 4,
            );

            $the_query = new WP_Query($args_rand);
            if ($the_query->have_posts()) :
            ?> <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="recom-article">

                        <?php get_template_part('template-parts/loop', 'shop'); ?>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : '検索結果がありませんでした'; ?>

            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>

<?php get_footer(); ?>
