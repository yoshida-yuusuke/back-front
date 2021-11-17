<!-- header.phpをインクルードする -->
<?php get_header(); ?>
<h2 class="pageTitle">最新情報<span>NEWS</span></h2>
                                <?php
$posttags = get_the_tags();
$tags = get_tags();
if ( $posttags ) {
foreach( $posttags as $tag) {
echo '<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>';
echo "\t";
}
}
?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <!-- メインループの開始 -->
                <?php if (have_posts()) : ?>
                    <!-- 繰り返し処理の開始 -->
                    <?php while (have_posts()) : ?>
                        <!-- 投稿を取得して$postグルーバル変数に設定する -->
                        <?php the_post(); ?>
                        <!-- <article class="article">  -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                            <header class="article_header">
                                <h2 class="article_title"><?php the_title(); ?></h2>
                            </header>

                            <div class="article_body">
                                <img src="" alt="アイコン">
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日 H:i'); ?></time>
                                <?php $post_author = get_the_author(); // 投稿者名の取得
                                ?>
                                <?php echo $post_author; // 投稿者名の表示
                                ?>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                <?php comments_template(); ?>
                            </div>

<?php
$posttags = get_the_tags();
$tags = get_tags();
if ( $posttags ) {
foreach( $posttags as $tag) {
echo '<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>';
echo "\t";
}
}
?>
                            <button>
                                <a href="<?php the_field('page_id'); ?>">店舗詳細ページへ</a>
                            </button>
                            <?php echo do_shortcode('[addtoany]'); ?>
                            <div class="postLinks">
                                <div class="postLink postLink-prev"><?php previous_post_link('<iclass="fas fa-chevron-left"></i>%link'); ?>
                                </div>
                                <div class="postLink postLink-next"><?php next_post_link('%link<iclass="fas fa-chevron-right"></i>'); ?>
                                </div>
                        </article>
                        <!-- 繰り返し処理の終了 -->
                    <?php endwhile; ?>
                    <!-- メインループの終了 -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    <h2 class="justify-content-center">こちらの記事もオススメです</h2>
    <div class="row justify-content-center">
        <?php
        //メニューの投稿タイプ
        //taxonomyの取得
        $taxonomy_name  = get_query_var('taxonomy');
        $count = 0;

        //ランダム表示
        $args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'orderby' => 'rand',
            'posts_per_page' => 5,
        );

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php $count++; ?>
                <div class="col-md-3">
                    <?php if ($count = 5) {
                        get_template_part('template-parts/loop', 'speical5');
                    } else {
                        get_template_part('template-parts/loop', 'speical');
                    }; ?>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : '検索結果がありませんでした'; ?>
        <?php endif; ?>
    </div>
</main>


<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
