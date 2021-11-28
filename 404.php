<!-- header.phpをインクルードする -->
<?php get_header(); ?>



<!-- ---------------------------------------------
-------以下に各ページのマークアップをお願いします。-------
--------------------------------------------------->
<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
	<!--------------------
		トップの画像
	--------------------->
	<div class="page-header">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_404_header.jpg" alt="404のイメージ画像です" class="page-header-img" />
		<div class="pagefav-header-txt-wrap">
			<h2 class="h2-font top-img-title favorite-catchcopy">
				徳島で見つける、<br />
				あなた好みのうどん。
			</h2>
		</div>
	</div>

	<section class="archive-wrap">
		<div class="notfound-title">
			<h2 class="h2-font">Not Found</h2>
			<p class="notfound-txt">お探しのページは見つかりませんでした。</p>
		</div>


		<div class="archive-list">
			<p class="archive-list_title">次の記事もおすすめです</p>


			<?php
			//メニューの投稿タイプ
			$args = array(
				'post_type' => 'shop',
				'posts_per_page' => 9,
				'orderby' => 'rand',
			);
			$the_query = new WP_Query($args);
			$count = 0;
			if ($the_query->have_posts()) :
			?>
				<?php while ($the_query->have_posts()) : $the_query->the_post();
					$count++;
				?>

					<!-- 5番目だったら、archive-article-bigのクラスを付与する -->
					<div class="archive-article<?php if ($count % 5 == 0) echo " archive-article-big"; ?>">
						<div class="archive-article-img">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="記事のサムネイル画像です" />

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
			<?php endif; ?>
		</div>


		<!-- 記事内容(archive-list)終わり -->
	</section>

</main>

<!-- footer.phpをインクルードする -->
<?php get_footer(); ?>
