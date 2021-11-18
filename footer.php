<link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">

<!--footer作成中のため保留。
	footerが重複しているので注意。
	frontpageとshingle-shopのスクリプトは入っています。
-->

<footer class="footer">
  <div class="footer-flex-pc">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-wh-small.png" alt="" />
    </div>
    <div class="footer-navsns-wrap">
      <ul class="footer-nav">
        <li class="footer-nav-item"><a href="<?php echo home_url('/noodle/'); ?>">徳島の麺類事情</a></li>
        <li class="footer-nav-item"><a href="#">お店紹介</li>
        <ul class="footer-nav-shop">
          <li class="nav-item-shop"><a href="<?php echo home_url('/archives/shop_type/naruchuru'); ?>">なるちゅるうどん</a></li>
          <li class="nav-item-shop"><a href=" <?php echo home_url('/archives/shop_type/tarai'); ?>">たらいうどん</a></li>
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
    <div class="footer-twi-window">
      <a class="twitter-timeline" data-width="392" data-height="484" href="https://twitter.com/awa_udon?ref_src=twsrc%5Etfw">Tweets by awa_udon</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>

  <div class="copyright-wrap">
    <small class="copyright">copyright</small>
  </div>

  <!-- <div class="search-form">
    <form method="get" id="entryForm" action=" <?php echo home_url('/search-shop/'); ?>">
      <table class="search-form-table">
        <tr>
          <th>エリア</th>
          <td class="footer-select-td">
            <select name="shop_area" id="">
              <option value="" selected>エリアを選択　　　　　</option>
              <option value="narutoshi">鳴門市</option>
              <option value="awashi">阿波市</option>
              <option value="tokushimashi">徳島市周辺</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>種　類</th>
          <td class="footer-select-td">
            <select name="shop_type" id="">
              <option value="" selected>うどんの種類を選択　　</option>
              <option value="naruchuru">なるちゅるうどん</option>
              <option value="tarai">たらいうどん</option>
              <option value="honkakuha">本格派うどん</option>
            </select>
          </td>
        </tr>
      </table>
    </form>
  </div> -->
  <div id="page-top" class="js-scroll-top">TOPへ</div>
  <!-- 店舗の地域の選択肢 -->
  <!-- ここから検索フォーム -->
  <form method="get" id="searchform" action="<?php echo home_url('/search-shop/'); ?>">
    <!-- 店舗の種類の選択肢 -->
    種類：<select name="shop_type">
      <option value="" selected>---</option>
      <?php
      //店舗の種類一覧（スラッグ：shop_type）
      $terms = get_terms('shop_type', 'hide_empty=0');
      foreach ($terms as $term) {
        echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
      }
      ?>
    </select><br>
    地域：<select name="shop_area">
      <option value="">---</option>
      <?php
      //店舗の地域一覧（スラッグ：shop_area）
      $terms = get_terms('shop_area', 'hide_empty=0');
      foreach ($terms as $term) {
        echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
      }
      ?>
    </select><br>

    <!-- 店舗のタグ選択肢 -->
    特徴：
    <div class="condition">
      <?php
      $tags = get_terms(array('hide_empty' => false));
      foreach ($tags as $tag) :
        $checked = "";
      ?>
        <label>
          <?php echo esc_html($tag->name); ?>
          <input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->slug); ?>" <?php echo $checked; ?>>
        </label>
      <?php endforeach; ?>

      <button type='submit' name='action' value='send'>検索</button>
  </form>
  <!-- ここまで検索フォーム -->
  <div><small>copy right</div>
</footer>


<!-------------------------------------
    -------TOPへもどるボタンJSファイル-------
    ---------------------------- ---------->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-------------------------------------
    -------TOPへもどるボタンJSファイル-------
    ---------------------------- ---------->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/footer.js"></script>

<?php if (is_front_page()) { ?>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/front-page.js"></script>

<?php } elseif (is_singular('shop')) {  ?>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/single-shop.js"></script>
<?php } ?>

<?php wp_footer(); ?>
</body>

</html>
