<!-- header.phpをインクルードする -->
<?php get_header(); ?>


<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
	<!--------------------
          トップの画像
        --------------------->
	<div class="page-header">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_archive-course.JPG" alt="モデルコース一覧のイメージ画像です" class="page-header-img" />
		<div class="page-header-txt-wrap">
			<h2 class="h2-font top-img-title">モデルコース一覧</h2>
		</div>
	</div>


	<div class="archive-wrap">
		<div class="archive-list">

			<?php
			//メニューの投稿タイプ
			$args = array(
				'post_type' => 'course',
				'posts_per_page' => -1,
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				$count = 0;
			?>
				<?php while ($the_query->have_posts()) : $the_query->the_post();
					$count++;
				?>


					<!-- 5番目だったら、archive-article-bigのクラスを付与する -->
					<div class="archive-article<?php if ($count % 5 == 0) echo " archive-article-big"; ?>">
						<!--画像表示-->
						<div class="archive-article-img">
							<a href="<?php the_permalink(); ?>">
								<?php $img = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
								<?php if (!empty($img)) { ?>
									<img src="<?php echo $img; ?>" alt="記事のサムネイル画像です" />
								<?php } else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg">
								<?php } ?>
							</a>

							<!-- <button class="article-good">❤︎</button> -->
						</div>
						<a href="<?php the_permalink(); ?>" class="article-link">
							<p class="article-title"><?php the_title(); ?></p>
							<p class="article-txt"><?php the_excerpt(); ?></p>
						</a>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
		<!-- 記事内容(archive-list)終わり -->

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
