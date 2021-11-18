<?php get_header()?>

    <main>

      <div class="pkz">
      <ul class="pkz-ul">
          <li><?php get_template_part('template-parts/breadcrumb'); ?></li>
        </ul>
      </div>
      <!--------------------
          トップの画像
        --------------------->
      <div class="page-header">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/img_single-blog.JPG" alt="特集詳細のイメージ画像です" class="page-header-img" />
        <h2 class="h2-font top-img-title"><?php the_title()?></h2>
      </div>
      <?php if (have_posts()) : ?>
              <?php while (have_posts()) : ?>
                  <?php the_post(); ?>
              <?php endwhile;?>
          <?php endif;?>
      <!-----------------------
             コンテンツ
       ------------------------>
      <section class="single-blog-cont-wrap">
        <div class="single-blog-title">
          <h2 class="h2-font">食べきったら10円引き！勝負せよ、大食い特集</h2>
          <p>キャッチコピー</p>
        </div>
        <!-- ライター記述欄 -->
        <div class="single-blog-writer-wrap">
          <div class="icon">
            <a href="<?php echo home_url('/writer/'); ?>">
            <?php  $class="icon-img";?>
            <?php echo get_avatar(get_the_author_id()); ?>
            </a>
          </div>
          <div class="writer-text">
            <p class="day"><?php the_time('Y-m-d');?></p>
            <a href="<?php echo home_url('/writer/'); ?>">
              <p class="writer-name">
              <?php the_author(); ?>
              </p>
            </a>
          </div>
        </div>
        <!-------------------
        -----記事内容-------
        --------------------->
        <!-- 記事→article -->
        <div class="article-wrap">
          <!-- テキスト記述欄 -->
          <div class="single-blog-cont-txt">
          <?php the_content();?>
          </div>
          <div class="cont-tag">
            <small class="cont-tag-txt">image:©️__________</small>
            <small class="cont-tag-txt">
            <!-- タグ表示 -->
              <?php
                $posttags = get_the_tags();
                $tags = get_tags();
                if ( $posttags ) {
                foreach( $posttags as $tag) {
                echo '<p>' . '#'.$tag->name . '</p>';
                echo "\t";
                  }
                }
                ?>
              </small>
          </div>
        </div>
        <div class="shop-detail-btn">
          <a href="<?php get_permalink('つなげたいページのIDを入力する');?>">
            <button class="btn-orange">店舗の詳細はこちら</button>
          </a>
        </div>
        <ul class="share">
          <liclass="good">
          <?php wpfp_link() ?>
          </li>
          <li>
            <?php echo do_shortcode('[addtoany]'); ?>
          </li>
        </ul>
      </section>
      <!----------------------
       ----- おすすめ記事-----
    ------------------------->
      <!-- おすすめ→recom -->
      <section class="recom-wrap">
        <div class="recom-title">
          <p class="recom-title-p">こちらの記事もおすすめです</p>
        </div>
        <div class="recom-cont">
　　　　<?php
            //メニューの投稿タイプ
            //taxonomyの取得
            $taxonomy_name  = get_query_var('taxonomy');
            $count = 0;
            //ランダム表示
            $args = array(
                'post_type' => 'post',
                'paged' => $paged,
                'orderby' => 'rand',
                'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :?>

        <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
        <?php $count++; ?>
            <div class="recom-article">
                <?php if ($count = 5) {
                    get_template_part('template-parts/loop', 'speical5');
                    } else {
                    get_template_part('template-parts/loop', 'speical');
                };?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : '検索結果がありませんでした'; ?>
        <?php endif; ?>
    </div>
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
						<div class="archive-article-img">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="記事のサムネイル画像です" />
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
        <!-- 記事内容(recom-cont)終わり -->
      </section>
      <!-- おすすめ記事recom-wrap終わり -->
    </main>
    <?php get_footer()?>
  </body>
</html>
