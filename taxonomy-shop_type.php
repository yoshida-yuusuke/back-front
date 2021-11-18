<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">

	<!--------------------
			  トップの画像
			--------------------->
	<div class="page-header">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_archive-shop_naruto.JPG" alt="なるちゅるうどん店舗一覧のイメージ画像です" class="page-header-img" />
		<div class="page-header-txt-wrap">
			<h2 class="h2-font top-img-title">
				<!-- なるちゅるうどん店舗一覧 -->
				<!--カテゴリの取得-->
				<?php
				//termの取得
				$term_var = get_query_var('term');
				//配列を定義する
				$category = array('なるちゅる', 'たらい', '本格派');
				//termに対応したインデックス配列を表示
				if ($term_var == 'naruchuru') {
					echo $category[0];
				} elseif ($term_var == 'tarai') {
					echo $category[1];
				} else {
					echo $category[2];
				}
				?>
			</h2>


			<ul class="tag-wrap">
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

			<?php
			//メニューの投稿タイプ
			//taxonomyの取得
			$taxonomy_name  = get_query_var('taxonomy');


			//ランダム表示
			$args = array(
				'post_type' => 'shop',
				'paged' => $paged,
				'orderby' => 'rand',
				'posts_per_page' => 9,
				'taxonomy' => $taxonomy_name,
				'term' => $term_var,
			);

			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				$count = 0;
			?>
				<?php while ($the_query->have_posts()) : $the_query->the_post();
					$count++; ?>

					<!-- 5番目になったら、archive-article-bigのクラスを付与する -->
					<div class="archive-article<?php if ($count % 5 == 0) echo " archive-article-big"; ?>">
						<div class="archive-article-img">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="記事のサムネイル画像です" />
								<!-- アイキャッチです -->
								<div class="article-eye naruto">なるちゅる</div>
							</a>
							<!-- いいねボタンです -->
							<button class="article-good">❤︎</button>
						</div>
						<a href="<?php the_permalink(); ?>" class="article-link">
							<p class="article-title"><?php the_title(); ?></p>
							<p class="article-txt"><?php the_excerpt(); ?></p>
						</a>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : '検索結果がありませんでした'; ?>
			<?php endif; ?>

		</div>




		<!-- <div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_naruto.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye naruto">なるちゅる</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div> -->

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
			</ul>-->
		</div>
	</div>
</main>

<!-- ----------------------------------------------
-------以上に各ページのマークアップをお願いします。-------
--------------------------------------------------->


<!-- footer.phpをインクルードする -->
<?php get_footer(); ?>
