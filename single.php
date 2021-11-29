<?php get_header() ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!------- メイン ------->
<main class="main">
  <!--------------------
        トップの画像
    --------------------->
  <div class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_single-blog.JPG" alt="特集詳細のイメージ画像です" class="page-header-img" />
    <div class="pagefav-header-txt-wrap">
      <h2 class="h2-font top-img-title ">
        徳島で見つける、<br />
        あなた好みのうどん。</h2>
    </div>
    <!-- <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
      <?php endwhile; ?>
    <?php endif; ?> -->
  </div>

  <!-----------------------
            コンテンツ
      ------------------------>
  <section class="single-blog-cont-wrap">
    <div class="single-blog-title">
      <h2 class="h2-font"><?php the_title() ?></h2>
      <!-- <p>キャッチコピー</p> -->
    </div>
    <!-- ライター記述欄 -->
    <div class="single-blog-writer-wrap">
      <div class="icon">
        <a href="<?php echo home_url('/writer/'); ?>">
          <?php $class = "icon-img"; ?>
          <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </a>
      </div>
      <div class="writer-text">
        <p class="day"><?php the_time('Y-m-d'); ?></p>
        <a href="<?php echo home_url('/writer/'); ?>">
          <p class="writer-name">
            <?php the_author(); ?>
          </p>
        </a>
      </div>
    </div>
    <!-------------------
        -----記事内容-------
        --------------------->
    <!-- 記事→article -->
    <div class="article-wrap">
      <!-- テキスト記述欄 -->
      <div class="single-blog-cont-txt">
        <?php the_content(); ?>
      </div>


      <div class="cont-tag">
        <!-- タグ -->
        <small class="cont-tag-txt">
          <?php
          $posttags = get_the_tags();
          $tags = get_tags();
          if ($posttags) {
            foreach ($posttags as $tag) {
              echo '<p>' . '#' . $tag->name . '</p>';
              echo "\t";
            }
          }
          ?>
        </small>
      </div>
    </div>

    <!----------リンクアイコン一覧------------->
    <ul class="sns-btn-wrap">
      <!----お気に入りボタン----->
      <li class="shop-good">
        <button class="shop-good-btn"><?php wpfp_link() ?></button>
      </li>
      <!---snsシェアアイコン--->
      <li class="shop-sns">
        <?php echo do_shortcode('[addtoany]'); ?>
      </li>
    </ul>

    <!------------------ 一覧に戻るボタン -------------------------->
    <div class="shop-archiveback">
      <button class="btn-orange shop-archiveback-btn" type="button" onclick="location.href='<?php echo esc_url(home_url()) ?>/archives/category/special'">店舗一覧に戻る </button>
    </div>
  </section>

  <!----------------------
      ----- おすすめ記事-----
    ------------------------->
  <!-- おすすめ→recom -->
  <section class="recom-wrap">
    <div class="recom-title">
      <p class="recom-title-p">こちらの記事もおすすめです</p>
    </div>
    <div class="recom-cont">
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
        'posts_per_page' => 4,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php $count++; ?>
          <div class="recom-article">
            <?php get_template_part('template-parts/loop', 'speical'); ?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : '検索結果がありませんでした'; ?>
      <?php endif; ?>
    </div>
    </div>
    <!-- 記事内容(recom-cont)終わり -->
  </section>
  <!-- おすすめ記事recom-wrap終わり -->
</main>
<?php get_footer() ?>
</body>

</html>
