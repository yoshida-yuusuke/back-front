<?php get_header(); ?>
<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!--------------------
          トップの画像
        --------------------->
<div class="page-header">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-spe.jpg" alt="モデルコースのイメージ画像です" class="page-header-img" />
  <div class="page-header-txt-wrap">
    <h2 class="h2-font top-img-title">カテゴリー一覧</h2>
    <ul class="tag-wrap">
      <!-- このページのタグはベタ打ちする -->
      <li class="tag">#タグ</li>
      <li class="tag">#タグ</li>
      <li class="tag">#タグ</li>
      <li class="tag">#タグ</li>
      <li class="tag">#タグ</li>
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
<!-- ----------------------------------------------
-------以上に各ページのマークアップをお願いします。-------
--------------------------------------------------->

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
