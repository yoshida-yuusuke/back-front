<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>

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
                        $count=0;
						if ($the_query->have_posts()) :
						?>
							<?php while ($the_query->have_posts()) : $the_query->the_post();$count++;
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

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
