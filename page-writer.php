<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span></h2>
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-------------------------------------
-------------ページヘッダー------------
--------------------------------------->
        <div class="page-writer-top">
            <div class="writer-top page-header-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tl_page-writer_top.jpg" alt="" class="writer-top-img">
                <div class="top-logo writer-container">
                    <h2 class="top-title">わたしたちについて</h2>
                </div>
            </div>
        </div>

        <!-----------------------------------
----------------メイン---------------
------------------------------------>
        <div class="writer-container">

            <!------------- 全体紹介------------------->
            <div class="writer-intro writer-group">
                <p class="writer-intro-txt"> <?php the_content(); ?>
                </p>
            </div>

            <!------------- メンバーリスト一覧------------------->
            <div class="writer-member writer-group">
                <ul class="member-ul">

                    <!------------- メンバーごとli開始------------------->
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_yoshida.jpeg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_hayashi.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_motoki.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_sato.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_yoshida.jpeg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_hayashi.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_motoki.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_sato.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_yoshida.jpeg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_hayashi.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_motoki.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ハンドルネーム</p>
                            <p class="member-txt">執筆者情報テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        </div>
        </div>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
