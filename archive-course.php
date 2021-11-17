<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<h2 class="pageTitle">モデルコース一覧<span>COURSE</span></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
	<?php
	$courses = get_terms(array('taxonomy' => 'course'));
	if (!empty($courses)) :
	?>
		<?php foreach ($courses as $course) : ?>
			<section class="sec">
				<div class="container">
					<div class="row justify-content-center">
						<?php
						//メニューの投稿タイプ
						$args = array(
							'post_type' => 'course',
							'posts_per_page' => -1,
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
						?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<div class="col-md-3">
									<?php get_template_part('template-parts/loop', 'course'); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endforeach; ?>
	<?php endif; ?>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
