<?php get_header(); ?>
<!-------------パンくずリスト---------->
<?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<main class="main">
  <!---------------------
          topの画像
        --------------------->
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
          <?php the_content(); ?>
        </div>
      </div>
    </section>
    <!--course-routr-->

    <!-------------------------------
            モデルコースコンテンツ
        ------------------------------->

    <div class="course-cont-wrap">

      <?php for ($i = 1; $i < 7; $i++) {
        //ここから最大7か所の場所の表示

        if (get_field('spot-type' . $i) == 'None') {
          //場所の種類で「無し」を指定されていたらここで終わり
          break;
        }
        //場所の画像のURLをここで取得しておく
        $image = get_field('Introduction-image' . $i);
        $url = $image['sizes']['medium'];
        //奇数個目だったら1、偶数個目だったら2
        $clsnum = 1;
        if ($i % 2 == 0) {
          $clsnum = 2;
        }
      ?>
        <!------------ コース内容 ------------->

        <a id="corse-<?php echo $i; ?>"></a>

        <section class="course-<?php echo $clsnum; ?>" id="course-<?php echo $i; ?>">
          <div class="course-title-wrap">
            <p class="course-number-sp"><?php echo $i; //(SP限定)丸数字
                                        ?></p>
            <p class="">
              <?php echo get_field('catchphrase' . $i); //(SP限定)場所ごとのキャッチフレーズ
              ?>
            </p>
          </div>
          <div class="location-flex">
            <!--★★★-->
            <?php if (!empty($image)) { ?>
              <img class="course-img course-<?php echo $clsnum; ?>-img" src="<?php echo $url ?>" src="<?php echo $url ?>" alt="<?php the_field('location-name' . $i); ?>" />
            <?php } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_noimage.jpg">
            <?php } ?>
            <div class="course-txt-wrap course-txt-wrap-<?php echo $clsnum; ?>">
              <p class="course-number-pc"><?php echo $i; //(PC限定)数字
                                          ?></p>
              <div class="course-txt-group">
                <h3 class="course-spot-name"><?php the_field('location-name' . $i); //場所名
                                              ?></h3>
                <p class="course-txt">
                  <?php the_field('location' . $i); //場所概要
                  ?>
                </p>
              </div>
              <button type="button" onclick="location.href='<?php the_field('link' . $i); ?>'" class="btn-orange">
                詳細をチェックする
              </button>
            </div>
          </div>
          <!--★★★-->

          <!---------- 移動アイコン ここから ------------>
          <div class="move-icon-wrap">
            <p class="move-icon-time"><?php the_field('time' . $i); ?></p>
            <?php
            $access = strtolower(get_field('access-type' . $i)); //小文字に変換
            $num = $i % 2 + 1; //ロケーションが奇数個目だったら2、偶数個目だったら1
            //PC版の矢印＋乗り物アイコン
            if ($access != 'goal') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/<?php echo $access; ?>_arrow_pc<?php echo $num; ?>.png" alt="矢印" class="move-icon-arrow-pc">
            <?php else : ?>
              <!-- <div class="goal"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/icon_single-course_goalflag.png" alt="" class="flag">
              <!-- </div> -->
            <?php endif;
            // sp版の矢印＋乗り物アイコン
            if ($access != 'goal') : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model/<?php echo $access; ?>_arrow_sp2.png" alt="矢印" class="move-icon-arrow-sp">
            <?php else : ?>
            <?php endif; ?>

            <?php if ($access != 'goal') : ?>
              <!-- <p class="move-icon-time move-icon-time-right"><?php the_field('time' . $i); ?></p> -->
            <?php endif; ?>
          </div>
          <!---------- 移動アイコン ここまで ------------>

        </section>

      <?php } ?>

    </div>
    <!--div.course-cont-wrap-->
  </div>
  <!--div.course-wrap -->

  <!------------------ 一覧に戻るボタン -------------------------->
  <div class="course-archiveback">
    <button class="btn-orange course-archiveback-btn" type="button" onclick="location.href='<?php echo esc_url(home_url()) ?>/archives/course'">一覧に戻る </button>
  </div>

</main>

</body>

<?php get_footer(); ?>
