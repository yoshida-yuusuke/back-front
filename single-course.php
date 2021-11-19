<?php get_header(); ?>

<?php $none = false; ?>
<!-- モデルコース名が入る？ただカスタムフィールドで作るんじゃないのか？ -->
<h1>モデルコース</h1>






<a href="<?php echo home_url(); ?>">
    <!-- カテゴリーリンク? -->

    <!-- SNSアイコン -->
    <?php echo do_shortcode('[addtoany]'); ?>

    <!-- タイトル表示 -->
    <?php the_title(); ?>

    <!-- コンテンツ表示？ -->
    <?php the_content(); ?>

    <?php for ($i = 1; $i < 7; $i++) {

        if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink() ?>"></a></h2>


                <?php if (get_field('spot-type' . $i) != 'None') : ?>

                    <!-- 店舗指定 -->
                    <!-- 店舗名：<?php the_field('spot-type' . $i); ?><br /> -->


                    <!-- テキスト関連出力コード -->
                    <!-- 下のコードをコンテンツ班と話し合って出力先の位置をなんとなく決める。詳しい位置はCSS・javascriptであてる？ -->



                    <br />
                    <!-- テキスト関連ここまで？？ -->

                    <?php
                    $image = get_field('Introduction-image' . $i);
                    $url = $image['sizes']['medium'];
                    $width = $image['sizes']['medium-width'];
                    $height = $image['sizes']['medium-height'];
                    ?>
                    <img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

                    <!-- ロケーション名テキスト出力？？？ -->
                    <?php the_field('location-name' . $i); ?><br />
                    <!-- キャッチフレーズ出力？？？ -->
                    <?php the_field('catchphrase' . $i); ?><br />
                    <!-- ロケーション説明出力 -->
                    <?php the_field('location' . $i); ?><br />
                    <!-- サイト内もしくは外部リンク出力 -->
                    <?php the_field('link' . $i); ?><br />

                    <!-- デバッグ用のコード -->
                    <!-- <?php echo get_field('access-type' . $i); ?> -->

                    <?php if (get_field('access-type' . $i) == 'car') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/car_arrow_pc1.png" alt="">
                    <?php elseif (get_field('access-type' . $i) == 'bus') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/bus_arrow.png" alt="">
                    <?php elseif (get_field('access-type' . $i) == 'walk') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/walk_arrow_pc2.png.jpg" alt="">
                    <?php elseif (get_field('access-type' . $i) == 'Train') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/移動手段/Train.jpg" alt="">
                    <?php elseif (get_field('access-type' . $i) == 'Goal') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/goalflag.png" alt="">
                    <?php endif; ?>

                    <!-- 移動時間出力 -->
                    <?php the_field('time' . $i); ?><br />


                    <!-- eleseifとここにブレーク文NONEの場合にという事を書く? -->
                    <!-- Noneだったらブレークする -->
                <?php elseif (get_field('spot-type' . $i) == 'None') : ?>



                    <!-- for文のbreak判定のためにelseifに入った場合,変数にbreakのためにtrueを入れる -->
                    <?php $none = true ?>

                    <!-- while文のためのbreak -->
                    <?php break; ?>


                <?php endif; ?>


            <?php endwhile; ?>


            <?php if ($none == true) : ?>
                <?php break; ?>
            <?php endif; ?>

    <?php endif;
    }
    ?>


    <?php get_footer(); ?>
