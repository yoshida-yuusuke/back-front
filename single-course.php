<?php get_header(); ?>
<!-------------パンくずリスト---------->
<?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<?php $none = false; ?>
<div class="page-header">
  <main>
    <!---------------------
          topの画像
        -------------------->
    <div class="page-header">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_single-course_fune.jpg" alt="モデルコースのイメージ画像です" class="page-header-img" />
      <div class="page-header-txt-wrap">
        <h2 class="h2-font top-img-title">モデルコース</h2>

      </div>
    </div>

    <!-----------------------------
                コースの概要
        ------------------------------>
    <div class="course-wrap">
      <section class="course-routr">
        <h2 class="h2-font course-subtitle"><?php the_title(); ?></h2>
        <p><?php the_field('subtitle'); ?></p>

        <div class="tokushima-map-wrap">
          <div class="tokushima-map-ul-wrap">
            <ul class="tokushima-map-ul">
              <li>
                <?php the_content(); ?>

                <!-- <div class="course-txt-wrap course-txt-wrap-1"><?php if ($count % 2 == 0) echo " course-txt-wrap course-txt-wrap-2"; ?> -->

                <?php for ($i = 1; $i < 7; $i++) {

                  if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <a id="corse-<?php echo $i; ?>"></a>
                      <h2><a href="<?php the_permalink() ?>"></a></h2>


                      <?php if (get_field('spot-type' . $i) != 'None') : ?>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-------------------------------
            モデルコースコンテンツ
        ------------------------------->

      <div class="course-cont-wrap">

        <!------------ コース１ ------------->

        <section class="course-1" id="course-1">
          <div class="course-title-wrap">
            <p class="course-number-sp"><?php echo $i; ?></p>
            <?php the_content(); ?>
          </div>
          <?php
                        $image = get_field('Introduction-image' . $i);
                        $url = $image['sizes']['medium'];
          ?>
          <img class="course-img" src="<?php echo $url ?>" alt="観潮船の画像です" />
          <div class="course-txt-wrap course-txt-wrap-1">
            <p class="course-number-pc"><?php echo $i; ?></p>
            <div class="course-txt-group">
              <h3 class="course-spot-name"><?php the_field('location-name' . $i); ?></h3>
              <p class="course-txt">
                <?php the_field('location' . $i); ?>
              </p>
            </div>

            <button type="button" onclick="location.href='<?php the_field('link' . $i); ?>" class="btn-orange">
              <!-- 公式サイトをチェックする -->
            </button>
          </div>

          <!---------- 移動アイコン ------------>

          <div class="move-icon-wrap">

            <!--PC版-->
            <?php if (get_field('access-type' . $i) == 'car') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/car_arrow_pc1.png" alt="矢印" class="move-icon-arrow-pc">
            <?php elseif (get_field('access-type' . $i) == 'bus') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>assets/img/model/bus_arrow_pc1.png" alt="矢印" class="move-icon-arrow-pc">
            <?php elseif (get_field('access-type' . $i) == 'walk') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>assets/img/model/walk_arrow_pc1.png" alt="矢印" class="move-icon-arrow-pc">
            <?php elseif (get_field('access-type' . $i) == 'Train') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>assets/img/model/train_arrow_pc1.png" alt="矢印" class="move-icon-arrow-pc">
            <?php elseif (get_field('access-type' . $i) == 'Goal') : ?>
              <!-- <div class="goal"> -->
              <img src="<?php echo get_template_directory_uri(); ?>assets/img/model/icon_single-course_goalflag.png" alt="" class="flag">
              <!-- </div> -->
            <?php endif; ?>

            <!--sp版-->


            <?php if (get_field('access-type' . $i) == 'car') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/car_arrow_pc1.png" alt="矢印" class="move-icon-arrow-sp">
            <?php elseif (get_field('access-type' . $i) == 'bus') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/bus_arrow.png" alt="矢印" class="move-icon-arrow-sp">
            <?php elseif (get_field('access-type' . $i) == 'walk') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/walk_arrow_pc2.png.jpg" alt="矢印" class="move-icon-arrow-sp">
            <?php elseif (get_field('access-type' . $i) == 'Train') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/移動手段/Train.jpg" alt="矢印" class="move-icon-arrow-sp">
            <?php endif; ?>

            <p class="move-icon-time move-icon-time-right"><?php the_field('time' . $i); ?></p>
          </div>
        </section>

        <!-- </div> -->


        <!---------- コース２ ------------->

        <!--       <section class="course-2" id="course-2">
        <div class="course-title-wrap">
          <p class="course-number-sp">2</p>
          <p class="course-title">
            「郷土料理潮風」で鳴ちゅるうどんを食べよう！
          </p>
        </div>
        <img src="img/img_single-course_udon.jpg" alt="うどんの画像です" class="course-img course-2-img" />
        <div class="course-txt-wrap course-txt-wrap-2">
          <p class="course-number-pc">2</p>
          <div class="course-txt-group">
            <h3 class="course-spot-name">郷土料理 潮風</h3>
            <p class="course-txt">
              そろそろお腹がすく時間。<br />
              鳴門海峡の景色を見渡しながら、ご当地グルメの「鳴るちゅるうどん」を食べよう！
            </p>
          </div>

          <button type="button" onclick="location.href='https://www.uzusio.com/'" class="btn-orange">
            店舗の詳細はこちら
          </button>
        </div> -->

        <!---------- 移動アイコン ------------>
        <!--         <div class="move-icon-wrap">
          <img src="img/logo/icon_single-course_car_arrow_01.png" alt="矢印" class="move-icon-arrow-sp" />
          <img src="img/logo/icon_single-course_car_arrow_pc2.png" alt="矢印" class="move-icon-arrow-pc" />
          <p class="move-icon-time">車で５分</p>
        </div>
      </section>
 -->

        <!---------- コース３ ------------->
        <!--       <section class="course-3" id="course-3">
        <div class="course-title-wrap">
          <p class="course-number-sp">3</p>
          <p class="course-title">「大塚国際美術館」で芸術に触れよう！</p>
        </div>
        <img src="img/img_single-course_otuka.jpg" alt="大塚国際美術館の画像です" class="course-img" />
        <div class="course-txt-wrap course-txt-wrap-3">
          <p class="course-number-pc">3</p>
          <div class="course-txt-group">
            <h3 class="course-spot-name">大塚国際美術館</h3>
            <p class="course-txt">
              午後は国内最大級の陶板名画美術館、大塚国際美術館で芸術に触れる。<br />
              西洋名画から現代絵画まで1,000点余りの名画をじっくりと堪能しよう！<br />
              (所用時間：1時間〜)
            </p>
          </div>

          <button type="button" onclick="location.href='https://www.uzusio.com/'" class="btn-orange">
            公式サイトをチェックする
          </button>
        </div>
      </section>
-->

        <!-- eleseifとここにブレーク文NONEの場合にという事を書く? -->
        <!-- Noneだったらブレークする -->
      <?php elseif (get_field('spot-type' . $i) == 'None') : ?>
        <!-- for文のbreak判定のためにelseifに入った場合,変数にbreakのためにtrueを入れる -->
        <?php $none = true; ?>
        <!-- while文のためのbreak -->
        <?php break; ?>
      <?php endif; ?>
    <?php endwhile; ?>
    <?php if ($none == true) : ?>
      <?php break; ?>
    <?php endif; ?>
  </main>
<?php endif;
                }
?>

<!-- <div class="goal">
  <img src="<?php echo get_template_directory_uri(); ?>assets/img/logo/icon_single-course_goalflag.png" alt="ゴールの旗です" class="flag" />
</div>-->
</div>
</div>
</body>

<?php get_footer(); ?>
