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
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_page-favorite.jpg" alt="404のイメージ画像です" class="page-header-img" />
		<div class="page-header-txt-wrap page-header-txt-wrap-favorite">
			<h2 class="h2-font top-img-title favorite-catchcopy">
				徳島で見つける、<br />
				あなた好みのうどん。
			</h2>
		</div>
	</div>

	<section class="archive-wrap">
		<div class="notfound-title">
			<!-- <h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2> -->
			<h2 class="h2-font">Not Found</h2>
			<p class="notfound-txt">お探しの記事は見つかりませんでした。</p>
			<p>次の記事もおすすめです。</p>
		</div>

		<div class="archive-list">


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
							</a>
							<!-- <button class="article-good">❤︎</button> -->
						</div>
						<a href="<?php the_permalink(); ?>" class="article-link">
							<p class="article-title"><?php the_title(); ?></p>
							<p class="article-txt"><?php the_excerpt(); ?></p>
						</a>
					</div>
					<!-- <a href="single-shop.html">
								<img src="img/img_archive-shop_honkaku.JPG" alt="記事のサムネイル画像です" />
								<div class="article-eye honkaku">本格うどん</div>
							</a>
							<button class="article-good">❤︎</button>
						</div>
						<a href="single-shop.html" class="article-link">
							<p class="article-title">記事タイトル</p>
							<p class="article-txt">テキストテキスト</p>
						</a> -->
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		</div>
		<!-- 記事内容(archive-list)終わり -->
	</section>

</main>

<!-- footer.phpをインクルードする -->
<?php get_footer(); ?>



<!---------------------
ここからPHP
--------------------->
<div class="main">
	<div class="container">
		<p>お探しのページが見つかりませんでした。</p>
		<p>次の記事もおすすめです</p>
	</div>
	<?php
	$courses = get_terms(array('taxonomy' => 'shop'));
	if (!empty($courses)) :
	?>
		<?php foreach ($courses as $course) : ?>


			<section class="sec">
				<div class="container">
					<div class="row justify-content-center">
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




								<div class="col-md-3">
									<?php if ($count = 5) {
										get_template_part('template-parts/loop', 'shop');
									} else {
										get_template_part('template-parts/loop', 'shop5');
									}; ?>
								</div>







							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endforeach; ?>
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
		</div>

		<div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_tarai.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye tarai">たらいうどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div>

		<div class="archive-article">
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
		</div>

		<div class="archive-article archive-article-big">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_honkaku.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye honkaku">本格うどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div>

		<div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_honkaku.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye honkaku">本格うどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div>

		<div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_tarai.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye tarai">たらいうどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div>

		<div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_honkaku.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye honkaku">本格うどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div>

		<div class="archive-article">
			<div class="archive-article-img">
				<a href="single-shop.html">
					<img src="img/img_archive-shop_honkaku.JPG" alt="記事のサムネイル画像です" />
					<div class="article-eye honkaku">本格うどん</div>
				</a>
				<button class="article-good">❤︎</button>
			</div>
			<a href="single-shop.html" class="article-link">
				<p class="article-title">記事タイトル</p>
				<p class="article-txt">テキストテキスト</p>
			</a>
		</div> -->
