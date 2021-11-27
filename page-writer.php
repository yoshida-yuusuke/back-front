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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_writer_header.jpg" alt="" class="writer-top-img">
                <div class="top-logo writer-container">
                    <h2 class="top-title"><?php the_title(); ?></h2>
                    <!-- <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span></h2> -->
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
            <div class="writer-member writer-group writer-space-bottom">
                <ul class="member-ul">

                    <!------------- メンバーごとli開始------------------->
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_yoshida.jpeg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">Y・Y</p>
                            <p class="member-txt">心優しい筋肉バカ。１度うどんの大食いに挑戦したことがある。好きなうどんは肉うどん。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_hayashi.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">おもちもち</p>
                            <p class="member-txt">かいじゅう大好き愛すべき妹キャラ。阿波うどん運動を通じてうどん愛を育成中。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_ogose.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">humangas</p>
                            <p class="member-txt">時たま野菜を届けてくれるうんちくお兄さん。好きなうどんはたらいうどん。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_sato.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">S.Sato</p>
                            <p class="member-txt">テキパキ仕事をこなすできるゲームオタク。好きなうどんはきつねうどん。</p>
                        </div>
                    </li>
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_abe.jpeg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">あべ</p>
                            <p class="member-txt">笑顔届けるみんなのアイドル。好きなうどんは冷かけ。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_miichi.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">黄蓮華升麻</p>
                            <p class="member-txt">趣味は登山と家庭菜園、アウトドア派の元気印。好きなうどんはわかめうどん。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_ay.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">ao</p>
                            <p class="member-txt">美的センスNo.1。実はモンスター育成ゲームが大好き。好きなうどんは温玉ぶっかけ。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_takeji.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">takeji</p>
                            <p class="member-txt">癒し系番長。食べることが大好きな歩くグルメブック。好きなうどんは肉うどん。</p>
                        </div>
                    </li>
                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_motoki.png" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">月光ヤミ</p>
                            <p class="member-txt">謎多き人物。好きなうどんはカレーうどん。</p>
                        </div>

                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_morioka.JPG" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">yogamm</p>
                            <p class="member-txt">健康オタク。特にヨガと温泉がお気に入り。好きなうどんはざるうどん。</p>
                        </div>
                    </li>

                    <li class="member-li">
                        <div class="member-avater">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avater_fujioka.jpg" alt="" class="member-img">
                        </div>
                        <div class="member-cont">
                            <p class="member-name">みーる</p>
                            <p class="member-txt">うどん県に闘志を燃やす徳島のうどん好き。好きなうどんは生醤油うどん。</p>
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
