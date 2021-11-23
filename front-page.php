<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<main>
  <section class="section-mv">
    <div class="mv-logo">
      <img class="mv-logo-img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo_maincolor.png" alt="" />
    </div>

  </section>

  <!-- ------------------------------------------
------------------サイトイントロ-----------------
---------------------------------------------->

  <section class="home-section home-intro">
    <h2 class="catchcopy h2-font">
      <span class="catchcopy-bg">
        徳島で見つける、<br />
        あなた好みのうどん。
      </span>
    </h2>
    <p class="home-intro-txt txt-font">
      実は徳島県、麺文化が盛んなんです。徳島ラーメンはもちろん、半田そうめんに祖谷そば、そしてなんといっても「うどん」がアツい。<br /><br />
      うどんと言えばお隣の香川県が有名ですが、徳島県にもうどん文化が存在します。<br /><br />
      郷土料理として親しまれてきた「たらいうどん」、地元でずっと愛されてきた「なるちゅるうどん」<br /><br />
      徳島にはご当地うどんが２つもあるのです。<br />
      徳島に来て、これを食べにゃソンソン！
    </p>
    <button class=" btn-blue home-intro-btn" type="button" onclick="location.href='<?php echo home_url('/noodle/'); ?>'">

      徳島の麺事情を知る！

    </button>
  </section>

  <!-- ------------------------------------------
----------------3種類のうどん紹介-----------------
---------------------------------------------->

  <section class="home-section home-kind">
    <h2 class="h2-font section-kind-title">徳島にあるうどんの種類</h2>

    <ul class="home-kind-ul">
      <li class="kind-item-flex">
        <div class="home-kind-tarai home-kind-item ">
          <div class="kind-tarai-cnt">
            <p class="home-kind-txt">
              もちもち<br />
              ほっかほか！<br />
              みんなで囲む<br />
              阿波の伝統料理
            </p>
            <h3 class="home-slide-title"><button class="home-kind-btn">
                たらいうどん
              </button></h3>
          </div>
          <a class="home-kind-link" href=" <?php echo home_url('/archives/shop_type/tarai'); ?>"></a>
        </div>

        <div class="kind-pict-tarai kind-pict"><img src="<?php echo get_template_directory_uri() ?>/assets/img/img_front_tarai.png" alt="阿波土柱"></div>
        </div>
      </li>

      <div class="kind-item-flex">

        <div class="kind-pict-naruto kind-pict"><img src="<?php echo get_template_directory_uri() ?>/assets/img/img_front_naruto.png" alt="鳴門海峡"></div>

        <li class=" home-kind-naru home-kind-item ">
          <div class="kind-naru-cnt">
            <p class="home-kind-txt">
              ちゅるちゅる食感が<br />
              たまらない！<br />
              鳴門の愛され個性派うどん
            </p>
            <h3 class="home-slide-title"><button class="home-kind-btn">
                なるちゅるうどん
              </button></h3>
          </div>
          <a class="home-kind-link" href=" <?php echo home_url('/archives/shop_type/naruchuru'); ?>"></a>
        </li>

      </div>


      <li class="home-kind-honkaku home-kind-item ">
        <div class="kind-honkaku-cnt">
          <p class="home-kind-txt">
            うどん激戦区<br />
            徳島の職人こだわりザ・うどん
          </p>
          <button class="home-kind-btn">
            <h3 class="home-kind-title">本格派うどん</h3>
          </button>
        </div>
        <a class="home-kind-link" href="<?php echo home_url('/archives/shop_type/honkakuha'); ?>"></a>
      </li>
    </ul>
  </section>

  <!-- ------------------------------------------
------------県外からのアクセス-------------------
---------------------------------------------->

  <section class="home-section home-access accordion-area">
    <h2 class="h2-font home-access-title">
      <button class="btn-access btn-orange">
        <span class="access-btn-txt">県外からのアクセス</span>
      </button>
    </h2>

    <!-- ------------------------------------------
------------県外からのアクセス中身-----------------
------------------------------------------->

    <div class="home-access-wrap box">
      <div class="home-map-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/img_front_access.jpg" alt="地図" /></div>
      <h3 class="access-subtitle">各駅から徳島駅まで</h3>

      <div class="access-wrap-pc">
        <h4 class="traffic">自転車</h4>
        <dl>
          <dt>岡山駅</dt>
          <dd>長尾街道経由6時間</dd>
          <br />
          <dt>高松駅</dt>
          <dd>国道11号経由3.5時間</dd>
        </dl>
        <h4 class="traffic">車</h4>
        <dl>
          <dt>岡山駅</dt>
          <dd>瀬戸中央自動車道&nbsp;と&nbsp;高松自動車道2時間</dd>
          <br />
          <dt>高松駅</dt>
          <dd>高松自動車道1時間</dd>
          <br />
          <dt>大阪駅</dt>
          <dd>神戸淡路鳴門自動車道経由2時間</dd>
          <br />
          <dt>舞子駅</dt>
          <dd>神戸淡路鳴門自動車道経由1.5時間</dd>
        </dl>
        <h4 class="traffic">電車・バス</h4>
        <dl>
          <dt>岡山駅</dt>
          <dd>JR瀬戸大橋線・JRうずしお経由2時間</dd>
          <br />
          <dt>高松駅</dt>
          <dd>JRうずしお経由1時間</dd>
          <br />
          <dt>大阪駅</dt>
          <dd>東海道山陽本線、神戸空港線経由2.5時間</dd>
          <br />
          <dt>舞子駅</dt>
          <dd>神戸空港線経由1.5時間</dd>
        </dl>
        <h4 class="traffic">フェリー</h4>
        <dl>
          <dt class="dt-padding">和歌山港</dt>
          <dd>南海フェリー経由タクシーまたはバス移動で2.5時間</dd>
        </dl>
      </div>
    </div>
  </section>

  <!-- ------------------------------------------
-------------------モデルコース-----------------
---------------------------------------------->

  <section class="home-section home-model">
    <h2 class="h2-font">モデルコース</h2>
    <div class="home-model-wrap">
      <p class="home-model-txt">
        徳島とうどんを満喫する６つのモデルコースをご紹介
      </p>
      <button class="home-btn-model btn-blue">ここから見る</button>
    </div>
    <a class="home-model-link" href=" <?php echo home_url('/archives/course'); ?>"></a>
  </section>


  <!-- ------------------------------------------
-----------------------特集----------------------
---------------------------------------------->

  <section class="home-section home-spe">
    <h2 class="h2-font">特集</h2>
    <ul class="home-spe-ul flex">
      <li class="home-spe-item">
        <a href="<?php echo get_permalink(128); ?>"><img class="home-spe-img" src="<?php echo get_template_directory_uri() ?>/assets/img/thumb_blog_sappari.jpg" alt="" /></a>
      </li>
      <li class="home-spe-item">
        <a href="<?php echo get_permalink(157); ?>"><img class="home-spe-img" src="<?php echo get_template_directory_uri() ?>/assets/img/thumb_blog_koseiha.jpg" alt="" /></a>
      </li>
      <li class="home-spe-item">
        <a href="<?php echo get_permalink(128); ?>"><img class="home-spe-img" src="<?php echo get_template_directory_uri() ?>/assets/img/thumb_blog_sidemenu.jpg" alt="" /></a>
      </li>
      <li class="home-spe-item">
        <a href="<?php echo get_permalink(157); ?>"><img class="home-spe-img" src="<?php echo get_template_directory_uri() ?>/assets/img/thumb_blog_henro.jpg" alt="" /></a>
      </li>
    </ul>
  </section>
</main>

<!-- footer.phpをインクルードする -->
<?php get_footer(); ?>
