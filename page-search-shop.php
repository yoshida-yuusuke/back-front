<?php get_header(); ?>

<!-- 検索条件の変数指定 -->
<?php $analyze = true; ?>

<!-- 送信後の検索結果を作る -->

<?php
//送信で送られてきた、検索条件で選択された「種類」と「地域」の値（スラッグ）を取得する
$shop_type_slug = ($_GET["shop_type"] != "" ? $_GET["shop_type"] : "");
$shop_area_slug = ($_GET["shop_area"] != "" ? $_GET["shop_area"] : "");
// 新たに引っ張ってきた変数
$get_tags
    = (!empty($_GET["shop_tag"]) ? $_GET["shop_tag"] : "");
// $shop_tag_slug[] = ($_GET["shop_tag"] != "" ? $_GET["shop_tag"] : "");

//スラッグからカテゴリー（タクソノミー）の名前を取得する
if ($shop_type_slug != "") {
    $shop_type_name = get_term_by('slug', $shop_type_slug, 'shop_type')->name;
}
if ($shop_area_slug != "") {
    $shop_area_name = get_term_by('slug', $shop_area_slug, 'shop_area')->name;
}
// 1:タグ条件？？？？
//is_set の方がよいとの指摘、配列かどうかしか見てないんじゃないかとの指摘
if (is_array($get_tags)) {
    echo '<p>タグ:';
    foreach ($get_tags as $value) {
        // $s_term = get_term_by('slug', $value, 'post_tag');
        // echo $s_term->name;
        // 今の値が最後の値じゃない場合はエコーだせという命令
        if ($value !== end($get_tags)) {
            echo ', ';
        }
    }
    echo '</p>';
}
// 検索の変数指定
$do_search = true;
?>

<div style="font-size:17px;margin-top:3rem">

    <h2>検索結果一覧</h2>

    <br><br>

    <b>【検索条件】</b>&nbsp;
    <?php
    if ($shop_type_slug != "") {
        //前の画面で選択されていたうどんの種類を表示
        //送られてきた店舗名はいつもひとつだけなのか？
        echo "<b>種類：</b>" . $shop_type_name . "&nbsp;";
    }
    if ($shop_area_slug != "") {
        //前の画面で選択されていた地域を表示
        //送られてきたエリア名はいつもひとつだけなのか？
        echo "<b>地域：</b>" . $shop_area_name . "&nbsp;";
    }
    ?>

    <br><br>

    <?php
    //ここから検索のパラメーターを準備する

    //A. 種類と地域の両方が選択されている場合
    // if文の追加、各セクターごとに条件分岐を作る。下に追加しているがそれの読み解き
    if ($get_tags) {
        $args = array(
            'post_type' => 'shop', //カスタム投稿「shop」
            'post_status' => 'publish', //公開された投稿のみ
            'orderby' =>  'date', //日付の順に並べる
            'order' =>  'DESC', //降順に並べる

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

                //タクソノミー「shop_area」の検索
                'tax_query' => array(
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



    <?php
    //検索実行
    if ($do_search) {
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                <section class="menu">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="menu_pic">
                            <!-- 投稿にアイキャッチがあるかどうかの判定 -->
                            <?php if (has_post_thumbnail()) : ?>
                                <!-- 投稿にアイキャッチがある場合、出力、画像サイズ指定 -->
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <!-- されているかされているか像指定して引っ張ってきている？とりあえずNoimage指定？ -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                            <?php endif; ?>
                        </figure>
                        <!-- 記事タイトル引っ張ってきて表示 -->
                        <h3 class="menu_title"><?php the_title(); ?></h3>
                        <div class="menu_desc">
                            <!-- 投稿文引っ張ってきて表示 -->
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </section>
    <?php
                echo "<br>";
            }
        } else {
            echo "検索結果がありませんでした。";
        }
        wp_reset_postdata();
    } else {
        echo "検索条件が指定されていません。";
        // 検索条件が指定されてない場合の変数代入
        $analyze = false;
    }
    ?>


</div>
<!-- 星の上が検索結果、星の下以降がランダム表示 -->
☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆<br>

<!-- ページネーション設定 -->
<!-- function-existsは関数が定義されているかどうか判定している -->
<!--$analyze = trueの場合のみページナビを表示するようにする。  -->
<!-- $analyze = false、検索条件なしだと処理が行われずページナビが表示されない -->
<?php if (function_exists('wp_pagenavi')) {
    if ($analyze == true) {
        wp_pagenavi(array('query' => $the_query));
    }
}
?>
<?php

// ランダム表示の設定
$args_rand = array(
    'post_type' => 'shop',
    'orderby' => 'rand',
    'posts_per_page' => 3,
);
// ランダム表示時の見出し

echo "こちらもおススメ！！！";

if ($do_search) {
    $the_query_rand = new WP_Query($args_rand);

    if ($the_query_rand->have_posts()) {
        while ($the_query_rand->have_posts()) {
            $the_query_rand->the_post();
            //とりあえずタイトル（店名）だけ出力
            // ここにサムネイル表記を書いていく
?>

            <section class="menu">

                <a href="<?php the_permalink(); ?>">
                    <figure class="menu_pic">
                        <!-- 投稿にアイキャッチがあるかどうかの判定 -->
                        <?php if (has_post_thumbnail()) : ?>
                            <!-- 投稿にアイキャッチがある場合、出力、画像サイズ指定 -->
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <!-- 画像指定して引っ張ってきている？とりあえずNoimage指定？ -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                        <?php endif; ?>
                    </figure>
                    <!-- 記事タイトル引っ張ってきて表示 -->
                    <h3 class="menu_title"><?php the_title(); ?></h3>
                    <div class="menu_desc">
                        <!-- 投稿文引っ張ってきて表示 -->
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </section>
<?php
            echo "<br>";
        }
    } else {
        echo "検索結果がありません";
    }
}
wp_reset_postdata();



?>



<?php get_footer(); ?>
