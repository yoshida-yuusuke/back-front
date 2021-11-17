<?php get_header(); ?>



<h1>モデルコース</h1>

<!-- タグ表示のみ検索機能はまだ -->
<?php
$tags = get_terms(array('hide_empty' => false));
foreach ($tags as $tag) :
    $checked = "";
?>
    <label>
        <input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->term_id); ?>" <?php echo $checked; ?>>
        <?php echo esc_html($tag->name); ?>
    </label>
<?php endforeach; ?>

<button type='submit' name='action' value='send'>検索</button>

<!-- SNSアイコン指定表示試験：とりあえず出してるだけ。後で消す -->
<a href="<?php echo home_url(); ?>">
    <!-- カテゴリーリンク? -->
    <?php echo do_shortcode('[addtoany]'); ?>
    <!-- 標準ブロック,これを複数個設置 -->
    <a href="<?php echo home_url('/category/'); ?>">
        <!-- コース詳細 -->
        <a href="<?php echo home_url('/single-course/') ?>" <?php
                                                            if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?> <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <!-- Noneが選ばれていないかどうかの判定 -->
            <?php if (get_field('spot-type1') != 'None') : ?>
                <!-- 店舗指定 -->
                店舗名：<?php the_field('spot-type1'); ?><br />
                <!-- 画像指定(店舗及び観光地) -->
                <?php
                                                                                            $image = get_field('Introduction-image1');
                                                                                            $url = $image['sizes']['medium'];
                                                                                            $width = $image['sizes']['medium-width'];
                                                                                            $height = $image['sizes']['medium-height'];
                ?>
                <img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />
                <!-- 画像指定(アクセス方法)及びアクセス方法のif文 -->
                <?php
                                                                                            // 文章は必要ないが画像データは出力したい画像データ出力のための条件文を書く、各自条件はフロント班から降りてきた物を見てから書く方が良いとの事。
                                                                                            $access = get_field('access-type1');
                                                                                            if ($access == "bus") {
                                                                                                echo "バス";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "Train") {
                                                                                                echo "汽車";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "walk") {
                                                                                                echo "徒歩";
                                                                                                // 各自条件
                                                                                            } else {
                                                                                                echo "車";
                                                                                                // 各自条件
                                                                                            }

                ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- 標準ブロック,これを複数個設置 -->
    <a href="<?php echo home_url('/category/'); ?>">
        <!-- コース詳細 -->
        <a href="<?php echo home_url('/single-course/') ?>" <?php
                                                            if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?> <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <!-- Noneが選ばれていないかどうかの判定 -->
            <?php if (get_field('spot-type2') != 'None') : ?>
                <!-- 店舗指定 -->
                店舗名：<?php the_field('spot-type2'); ?><br />
                <!-- 画像指定(店舗及び観光地) -->
                <?php
                                                                                            $image = get_field('Introduction-image2');
                                                                                            $url = $image['sizes']['medium'];
                                                                                            $width = $image['sizes']['medium-width'];
                                                                                            $height = $image['sizes']['medium-height'];
                ?>
                <img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />
                <!-- 画像指定(アクセス方法)及びアクセス方法のif文 -->
                <?php
                                                                                            // 文章は必要ないが画像データは出力したい画像データ出力のための条件文を書く、各自条件はフロント班から降りてきた物を見てから書く方が良いとの事。
                                                                                            $access = get_field('access-type2');
                                                                                            if ($access == "bus") {
                                                                                                echo "バス";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "Train") {
                                                                                                echo "汽車";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "walk") {
                                                                                                echo "徒歩";
                                                                                                // 各自条件
                                                                                            } else {
                                                                                                echo "車";
                                                                                                // 各自条件
                                                                                            }

                ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <a href="<?php echo home_url('/category/'); ?>">
        <!-- コース詳細 -->
        <a href="<?php echo home_url('/single-course/') ?>" <?php
                                                            if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?> <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <!-- Noneが選ばれていないかどうかの判定 -->
            <?php if (get_field('spot-type3') != 'None') : ?>
                <!-- 店舗指定 -->
                店舗名：<?php the_field('spot-type1'); ?><br />
                <!-- 画像指定(店舗及び観光地) -->
                <?php
                                                                                            $image = get_field('Introduction-image3');
                                                                                            $url = $image['sizes']['medium'];
                                                                                            $width = $image['sizes']['medium-width'];
                                                                                            $height = $image['sizes']['medium-height'];
                ?>
                <img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />
                <!-- 画像指定(アクセス方法)及びアクセス方法のif文 -->
                <?php
                                                                                            // 文章は必要ないが画像データは出力したい画像データ出力のための条件文を書く、各自条件はフロント班から降りてきた物を見てから書く方が良いとの事。
                                                                                            $access = get_field('access-type3');
                                                                                            if ($access == "bus") {
                                                                                                echo "バス";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "Train") {
                                                                                                echo "汽車";
                                                                                                // 各自条件
                                                                                            } elseif ($access == "walk") {
                                                                                                echo "徒歩";
                                                                                                // 各自条件
                                                                                            } else {
                                                                                                echo "車";
                                                                                                // 各自条件
                                                                                            }

                ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php get_footer(); ?>
