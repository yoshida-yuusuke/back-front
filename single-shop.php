<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>




<main class="main">
	<section class="sec">
		<div class="container">
			<!--タグ検索機能-->
			<?php
			$tags = get_terms(array('hide_empty' => false));
			foreach ($tags as $tag) :
				$checked = "";
			?>
				<label>
					<input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->term_id); ?>" <?php echo $checked; ?>>
					<?php echo esc_html($tag->name); ?>
				</label>
			<?php endforeach; ?>

			<button type='submit' name='action' value='send'>検索</button>
			<div class="article article-menu">
				<div class="row">
					<div class="col-12 col-md-6">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<h2 class="article_title"><?php the_title(); ?></h2>
								<span><?php the_field('catchcopy'); ?></span>
								<span><?php the_field('pic1'); ?></span>
								<span><?php the_field('pic2'); ?></span>
								<span><?php the_field('pic3'); ?></span>
								<span><?php the_field('pic4'); ?></span>
								<span><?php the_field('pic5'); ?></span>
								<span><?php the_field('stamp') ?></span>
								<div class="content">

									<?php the_content(); ?>
								</div>
								<span><?php the_field('mood') ?></span>
								<span><?php the_field('men') ?></span>
								<span><?php the_field('tuyu') ?></span>
								<span><?php the_field('taberepo'); ?></span>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php
						//メニューの投稿タイプ
						//taxonomyの取得
						$taxonomy_name  = get_query_var('taxonomy');
						//termの取得
						$term_var = get_query_var('term');


						//ランダム表示・付近のおすすめ未実装
						$args = array(
							'post_type' => 'shop',
							'orderby' => 'rand',
							'posts_per_page' => 4,
							'taxonomy' => $taxonomy_name,
							'term' => $term_var,
						);

						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
						?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<div class="col-md-3">
									<?php get_template_part('template-parts/loop', 'menu'); ?>

								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : '検索結果がありませんでした'; ?>

						<?php endif; ?>
					</div>

					<div class="col-12 col-md-6">
						<div class="article_pic">

						</div>
					</div>
				</div>
			</div>
			</article>
		</div>
	</section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
