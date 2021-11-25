<?php get_header(); ?>
<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<!--------------------
          トップの画像
        --------------------->
<div class="page-header">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-spe.jpg" alt="特集一覧のイメージ画像です。" class="page-header-img" />
  <div class="page-header-txt-wrap">
    <h2 class="h2-font top-img-title"><?php single_tag_title(); ?></h2>
    <ul class="tag-wrap">
      <!-- このページのタグはベタ打ちする？ -->
      <li class="tag">#うどん巡り</li>
      <li class="tag">#徳島観光</li>
      <li class="tag">#鳴門のうずしお</li>
      <li class="tag">#阿波の土柱</li>
      <li class="tag">#汽車</li>
    </ul>
  </div>
</div>

<div class="archive-wrap">
  <div class="archive-list">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="archive-article">
          <?php get_template_part('template-parts/loop', 'speical'); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!-- 記事内容(archive-list)終わり -->

  <!----------------------
        ページネーション
        ---------------------->
  <div class="pagenation-wrap">
    <?php if (function_exists('wp_pagenavi')) {
      wp_pagenavi();
    }
    ?>
  </div>
</div>
<!-- ----------------------------------------------
-------以上に各ページのマークアップをお願いします。---------------------------------------------------->

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
