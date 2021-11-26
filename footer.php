    <link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">

    <footer class="footer">
      <div class="footer-flex-pc">
        <div class="footer-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-wh-small.png" alt="">
          </a>
        </div>
        <div class="footer-navsns-wrap">
          <ul class="footer-nav">
            <li class="footer-nav-item"><a href="<?php echo home_url('/noodle/'); ?>">徳島の麺類事情</a></li>
            <li class="footer-nav-item">
              お店紹介</li>
            <ul class="footer-nav-shop">
              <li class="nav-item-shop"><a href="<?php echo home_url('/archives/shop_type/naruchuru'); ?>">なるちゅるうどん</a></li>
              <li class="nav-item-shop"><a href="<?php echo home_url('/archives/shop_type/tarai'); ?>">たらいうどん</a></li>
              <li class="nav-item-shop"><a href="<?php echo home_url('/archives/shop_type/honkakuha'); ?>">本格派うどん</a></li>
            </ul>

            <li class="footer-nav-item"><a href="<?php echo home_url('/archives/course'); ?>">モデルコース</a></li>
            <li class="footer-nav-item"><a href="<?php echo home_url('/archives/category/special'); ?>">特集</a></li>
            <li class="footer-nav-item"><a href="<?php echo home_url('/writer'); ?>">わたしたちについて</a></li>
            <li class="footer-nav-item"><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></li>
          </ul>

          <ul class="footer-sns">
            <li class="footer-sns-item"><a href="https://twitter.com/awa_udon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_twi.png" alt="twitter" /></a>
            </li>
            <li class="footer-sns-item"><a href="https://www.pinterest.jp/awaudonundou/?invite_code=f63dc900a4e94ee1be27475419d28eb6&sender=1096767452911558138">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_pint.png" alt="pintarest" /></a>
            </li>
            <li class="footer-sns-item"><a href="https://instagram.com/awa_udon?utm_medium=copy_link">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_insta.png" alt="instagram" /></a>
            </li>
          </ul>
        </div>

        <!-- ------------------------------------------
        ----------------Twitter埋め込み-----------------
      ---------------------------------------------- -->

        <div class="footer-twi-window">
          <a class="twitter-timeline" data-width="392" data-height="484" href="https://twitter.com/awa_udon?ref_src=twsrc%5Etfw">Tweets by awa_udon</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>

      <div class="copyright-wrap">
        <small class="copyright">copyright</small>
      </div>

      <!-- ---------------------------------------------
      --------------------検索フォーム-------------------
    -------------------------------------------------- -->

      <div id="searchForm-js" class="searchForm-js">
        <div class="search-form-tab"><span class="serch-title">店舗検索</span></div>

        <div class="search-form search-form-sp">
          <form id="entryForm" action="<?php echo home_url('/search-shop/'); ?>" method="get">

            <!-- --------------------------------------------
  -------------スマホタブレットテーブル-------------
----------------------------------------------- -->
            <table class="search-form-sp">
              <tr class="footer-select-tr">
                <th class="footer-select-th">エリア</th>
                <td class="footer-select-td">
                  <select name="shop_area">
                    <option value="" selected>エリアを選択　　　　　</option>
                    <option value="narutoshi">鳴門市</option>
                    <option value="awashi">阿波市</option>
                    <option value="tokushimashi">徳島市周辺</option>
                  </select>
                </td>
              </tr>
              <tr class="footer-select-tr">
                <th class="footer-select-th">種　類</th>
                <td class="footer-select-td">
                  <select name="shop_type">
                    <option value="" selected>うどんの種類を選択　　</option>
                    <option value="naruchuru">なるちゅるうどん</option>
                    <option value="tarai">たらいうどん</option>
                    <option value="honkakuha">本格派うどん</option>
                  </select>
                </td>
              </tr>
            </table>
            <ul class="search-form-ul">
              <?php
              $tags = get_terms('shop_tag');
              foreach ($tags as $tag) :
                $checked = "";
              ?>
                <li class="search-form-tag">
                  <label>
                    <input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->slug); ?>" /><?php echo esc_attr($tag->name); ?>
                  </label>
                </li>
              <?php endforeach; ?>
            </ul>
            <input class="search-form-btn" type="submit" value="検　索" />
          </form>
        </div>
        <!-- ----------------------------------------------
  ----------------------pcテーブル-------------------
--------------------------------------------------- -->
        <div class="search-form search-form-pc">
          <form id="entryForm" action="<?php echo home_url('/search-shop/'); ?>" method="get">

            <div class="form-pc-flex">
              <table class="search-form-pc">
                <tr>
                  <th class="footer-select-th">エリア</th>
                  <td class="footer-select-td">
                    <select name="shop_area">
                      <option value="" selected>エリアを選択　　　　　</option>
                      <option value="narutoshi">鳴門市</option>
                      <option value="awashi">阿波市</option>
                      <option value="tokushimashi">徳島市周辺</option>
                    </select>
                  </td>
                  <th class="footer-select-th">種　類</th>
                  <td class="footer-select-td">
                    <select name="shop_type">
                      <option value="" selected>うどんの種類を選択　　</option>
                      <option value="naruchuru">なるちゅるうどん</option>
                      <option value="tarai">たらいうどん</option>
                      <option value="honkakuha">本格派うどん</option>
                    </select>
                  </td>
                </tr>
              </table>
              <!-- ------------テーブル分岐終わり--------------- -->

              <ul class="search-form-ul">
                <?php
                $tags = get_terms('shop_tag');
                foreach ($tags as $tag) :
                  $checked = "";
                ?>
                  <li class="search-form-tag">
                    <label>
                      <input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->slug); ?>" /><?php echo esc_attr($tag->name); ?>
                    </label>
                  </li>
                <?php endforeach; ?>

              </ul>
            </div>

            <input class="search-form-btn" type="submit" value="検　索" />
          </form>
        </div>
      </div>

      <!-- -----------------topへ戻るボタン-------------------- -->

      <!--------------- sp版 --------------------->
      <a href="#">
        <div id="page-top" class="backTop-sp js-backTop">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_gotop_sp.png" alt="TOPへ戻る">
        </div>
      </a>

      <!-- -----------------pc版---------------->
      <a href="#">
        <div id="page-top" class="backTop js-backTop">
          <div class="backTop-wrap">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_gotop_udon_01.png" alt="TOPへ戻る" class="backTop-btn" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_gotop_udon_02.png" alt="TOPへ戻る" class="backTop-bottom" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_gotop_udon_03.png" alt="TOPへ戻る" class="backTop-bottom-2" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_gotop_udon_hover.png" alt="" class="backTop-top" />
          </div>
        </div>
      </a>

    </footer>



    <!-------------------------------------
    --------------JavaScript読み込み-----------
    ---------------------------- ------------->

    <!---------JQライブラリ読み込み- ---------->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <!-------------------------------------
    -------ページにあったJSファイル-------
    ---------------------------- ---------->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/footer.js"></script>

    <?php
    if (is_front_page()) { ?>
      <!--------フロントJS読み込み（アコーディオン）---------->
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/front-page.js"></script>
    <?php } elseif (is_singular('shop')) {  ?>
      <!------スライダーライブラリ、店舗詳細読み込み------->
      <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/single-shop.js"></script>
    <?php }
    ?>

    <?php wp_footer(); ?>
    </body>

    </html>
