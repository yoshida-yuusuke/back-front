<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">

	<!--------------------
			  トップの画像
			--------------------->
	<div class="page-header">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_taxonomy_shop_type_header.jpg" alt="店舗一覧のイメージ画像です" class="page-header-img" />
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


			<!-- 各種類のうどんからタグを持ってくる -->
			<ul class="tag-wrap">
				<?php
				$terms = getTerms_UdonType($term_var);
				foreach ($terms as $term) {
					echo '<li class="tag">#' . $term->name . '</li>';
				}
				?>

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
								<?php $img = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
								<?php if (!empty($img)) { ?>
									<img src="<?php echo $img; ?>" alt="記事のサムネイル画像です" />
								<?php } else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg">
								<?php } ?>

								<!-- アイキャッチです -->
								<?php
								$cats = get_the_terms(get_the_ID(), 'shop_type');
								$taxonomy_name = '';
								foreach ($cats as $cat) :
									$cat->slug;
									$taxonomy_name = $cat->slug;
								endforeach;
								$category = array('なるちゅる', 'たらい', '本格派');
								//termに対応したインデックス配列を表示
								if ($taxonomy_name == 'naruchuru') {
									echo '<div class="article-eye naruto">' . $category[0] . '</div>';
								} elseif ($taxonomy_name == 'tarai') {
									echo '<div class="article-eye tarai">' . $category[1] . '</div>';
								} else {
									echo '<div class="article-eye honkaku">' . $category[2] . '</div>';
								} ?>
							</a>

						</div>
						<a href="<?php the_permalink(); ?>" class="article-link">
							<p class="article-title"><?php the_title(); ?></p>
							<p class="article-txt"><?php the_excerpt(); ?></p>
						</a>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>投稿がありません</p><br><br>
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
		</div>
	</div>
</main>

<!-- ----------------------------------------------
-------以上に各ページのマークアップをお願いします。-------
--------------------------------------------------->


<!-- footer.phpをインクルードする -->
<?php get_footer(); ?>
