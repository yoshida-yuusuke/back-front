<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<div class="shingle-shop-wrap">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<!------------ ページヘッダー -------------------->
			<div class="single-shop-top">
				<div class="pkz">
					<ul class="pkz-ul">
						<li>
							<?php get_template_part('template-parts/breadcrumb'); ?>
						</li>
					</ul>
				</div>
				<div class="shop-top">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tl_single_shop_top.jpg" alt="" class="shop-top-img">
					<div class="top-logo shop-container">
						<h2 class="top-title">店舗情報</h2>
						<ul class="top-ul">
							<?php
							$terms = get_the_terms(get_the_ID(), 'shop_tag');
							foreach ($terms as $term) :
								echo '<li class="top-ul-tag">' . $term->name . '</li>';
							endforeach;
							?>

						</ul>
					</div>
				</div>
			</div>

			<!---------------------------------------------------
        ---------------------メイン---------------------------
        ----------------------------------------------------->
			<main class="shop-container">
				<!------------------ 店名、キャッチコピー、紹介文 ---------------------->
				<section class="shop-intro shop-sec">
					<h2 class="shop-intro-name index-mark1"><?php the_title(); ?></h2>
					<p class="shop-intro-catchcopy shop-space-bottom"><?php the_field('catchcopy'); ?></p>
					<div class="shop-slider-wrap shop-space-bottom">
						<div class="shop-slide-flex">
							<ul class="gallery">
								<li>
									<?php
									$image = get_field('pic1');
									$url = $image['sizes']['medium'];
									$width = $image['sizes']['medium-width'];
									$height = $image['sizes']['medium-height'];
									?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic2');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic3');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic4');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic5');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic6');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic7');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
								<li> <?php
										$image = get_field('pic8');
										$url = $image['sizes']['medium'];
										$width = $image['sizes']['medium-width'];
										$height = $image['sizes']['medium-height'];
										?>
									<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="gallery-img">
								</li>
							</ul>





							<ul class="choice-btn">
								<li class="choice-btn-li">
									<?php
									$image = get_field('pic1');
									$url = $image['sizes']['medium'];
									?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic2');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic3');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic4');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic5');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic6');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic7');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
								<li class="choice-btn-li"> <?php
															$image = get_field('pic8');
															$url = $image['sizes']['medium'];
															?>
									<img src="<?php echo $url ?>" class="choice-btn-img">
								</li>
							</ul>
						</div>
						<!--/slider-->
					</div>
					<p class="shop-detall-txt  "><?php the_content(); ?></p>
				</section>

				<!---------------------- 店の特徴メーター領域 ---------------------->
				<section class="shop-meter shop-sec" id="aaa">
					<h2 class="h2-font index-mark2 shop-space-bottom">店の特徴メーター</h2>
					<div class="shop-meter-cont">
						<?php if (get_field('mood') == 'mood1') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_1.png" alt="">
						<?php elseif (get_field('mood') == 'mood2') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_2.png" alt="">
						<?php elseif (get_field('mood') == 'mood3') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_3.png" alt="">
						<?php elseif (get_field('mood') == 'mood4') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_4.png" alt="">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_5.png" alt="">
						<?php endif; ?>

						<!--麺メーター-->
						<?php if (get_field('men') == 'men1') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_1.png" alt="">
						<?php elseif (get_field('men') == 'men2') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_2.png" alt="">
						<?php elseif (get_field('men') == 'men3') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_3.png" alt="">
						<?php elseif (get_field('men') == 'men4') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_4.png" alt="">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_5.png" alt="">
						<?php endif; ?>

						<!--つゆメーター-->
						<?php if (get_field('tuyu') == 'tuyu1') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_1.png" alt="">
						<?php elseif (get_field('tuyu') == 'tuyu2') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_2.png" alt="">
						<?php elseif (get_field('tuyu') == 'tuyu3') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_3.png" alt="">
						<?php elseif (get_field('tuyu') == 'tuyu4') : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_4.png" alt="">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_5.png" alt="">
						<?php endif; ?>
					</div>
				</section>

				<!----------------------- 基本情報、地図 --------------------------->
				<section class="shop-basic shop-sec">
					<h2 class="h2-font index-mark2 shop-space-bottom">基本情報</h2>

					<!--------flexbox----------->
					<div class="shop-basic-flex">

						<!-------------基本情報------------------->
						<table class="shop-basic-table shop-space-bottom">
							<tr>
								<th>店名</th>
								<td><?php the_field('name') ?></td>
							</tr>
							<tr>
								<th>電話番号</th><!-- 表示できません -->
								<td><a href="tel:<?php the_field('TEL') ?>"><?php the_field('TEL') ?></a></td>
							</tr>
							<tr>
								<th>予約可否</th>
								<td><?php if (get_field('yoyaku')) : ?>
										予約出来ます
									<?php else : ?>
										予約できません
									<?php endif; ?></td>
							</tr>
							<tr>
								<th>住所</th>
								<td><?php the_field('address') ?></td>
							</tr>
							<tr>
								<th>アクセス</th>
								<td><?php the_field('access') ?></td>
							</tr>
							<tr>
								<th>営業時間</th>
								<td><?php the_field('time') ?></td>
							</tr>
							<tr>
								<th>支払方法</th>
								<td><?php the_field('pay') ?></td>
							</tr>
							<tr>
								<th>席数</th>
								<td><?php the_field('seat') ?></td>
							</tr>
							<tr>
								<th>喫煙・喫煙</th>
								<td><?php the_field('smoke') ?></td>
							</tr>
							<tr>
								<th>駐車場</th>
								<td><?php the_field('space') ?></td>
							</tr>
							<tr>
								<th>サイト</th>
								<td>
									<a href="<?php the_field('HP_SNS') ?>" target="_blank" rel="noopener noreferrer"><?php the_field('HP_SNS') ?></a>
								</td>
							</tr>
						</table>

						<!-----------------地図 ----------------->
						<div class="shop-map">
							<?php the_field('map') ?>
						</div>
					</div>
					<!--/flexbox--->
				</section>

				<!------------ #食べレポInstagram埋め込み領域 ------------------>
				<section class="shop-report shop-sec">
					<h2 class="h2-font index-mark2 shop-space-bottom">＃食べレポ</h2>
					<div class="shop-report-cont">
						<a href="" target="_blank" rel="noopener noreferrer">
							<?php the_field('taberepo'); ?>

						</a>
					</div>

					<!---------- いいねボタン、SNSリンクアイコン ---------->
					<div class="shop-report-sns">
						<ul class="sns-btn-wrap shop-space-bottom">
							<li class="shop-good">
								<button class="shop-good-btn"><?php wpfp_link() ?></button>
							</li>

							<!-- <li class="shop-fb shop-sns"><a href="" target="_blank" rel="noopener noreferrer"><img src="./img/logo/icon_fb.png" alt=""></a></li>
							<li class="shop-twi shop-sns"><a href="" target="_blank" rel="noopener noreferrer"><img src="./img/logo/icon_twi.png" alt=""></a></li>
							<li class="shop-pint shop-sns"><a href="" target="_blank" rel="noopener noreferrer"><img src="./img/logo/icon_pnta.png" alt=""></a></li>
							<li class="shop-line shop-sns"><a href="" target="_blank" rel="noopener noreferrer"><img src="./img/logo/icon_insta3.png" alt=""></a></li> -->
						</ul>
					</div>
				</section>

				<!------------------ 一覧に戻るボタン -------------------------->
				<div class="shop-link-group shop-sec">

					<?php $udontype = ""; ?>
					<?php foreach ($terms as $term) {
						$udontype = $term->slug;
					} ?>
					<button class="btn-orange shop-archiveback-btn" type="button" onclick="location.href=" <?php $udontype = ""; ?>">
						店舗一覧に戻る
					</button>
				</div>
			<?php endwhile;
			?>
		<?php endif;
		?>
			</main>

			<!----------------------
       ----- おすすめ記事-----
    ------------------------->
			<!-- おすすめ→recom -->
			<section class="recom-wrap">
				<div class="recom-title">
					<h2 class="recom-title-p">こちらの記事もおすすめです</h2>
				</div>
				<div class="recom-cont">

					<?php
					//メニューの投稿タイプ
					//taxonomyの取得


					//カテゴリ(地域)の取得
					$areas = get_the_terms(get_the_ID(), 'shop_area');
					$taxonomy_name = '';
					foreach ($areas as $area) :
						$area->slug;
						$taxonomy_name = $area->slug;
					endforeach;


					//同じ地域ランダム表示
					$args = array(
						'post_type' => 'shop',
						'orderby' => 'rand',
						'posts_per_page' => 4,
						'tax_query' => array(
							array(
								'taxonomy' => 'shop_area',
								'field' => 'slug',
								'terms' => $taxonomy_name
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
					?> <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="recom-article">

								<?php get_template_part('template-parts/loop', 'shop'); ?>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : '検索結果がありませんでした'; ?>

					<?php endif; ?>
				</div>
			</section>



			<!-- header.phpをインクルードする -->
			<?php get_footer(); ?>
