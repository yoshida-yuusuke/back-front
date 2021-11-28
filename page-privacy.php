<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-------------------------------------
-------------ページヘッダー------------
--------------------------------------->
        <div class="page-writer-top">
            <div class="writer-top page-header-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_privacy_header.jpg" alt="プライバシーポリシーのイメージ画像です。" class="writer-top-img">
                <div class="top-logo writer-container">
                    <h2 class="h2-font top-title"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        <!-----------------------------------
----------------メイン---------------
------------------------------------>
        <main class="writer-container">
            <!------------- 全体紹介------------------->
            <div class="writer-intro writer-group">
                <div class="writer-intro-txt"> <?php the_content(); ?>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
