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
            <p>
              大食いのお店に行ってきました！<br/>
              家族で食べに行ったのですが、５玉を３人で食べました、、<br/>
              とてもお腹いっぱいになったので、次からは小サイズにしようと思います！！
            </p>
          </div>
          <!-- 画像 -->
          <div class="cont-img">
            <img src="img/img_single-blog.JPG" alt="特集記事詳細の記事画像です" />
          </div>
          <!-- テキスト記述欄 -->
          <div class="single-blog-cont-txt">
            <p>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <div class="cont-tag">
            <small class="cont-tag-txt">image:©️__________</small>
            <small class="cont-tag-txt"
              >＃タグ ＃タグ ＃タグ ＃タグ ＃タグ</small
            >
          </div>
        </div>
        <div class="shop-detail-btn">
          <a href="single-shop.html">
            <button class="btn-orange">店舗の詳細はこちら</button>
          </a>
        </div>
        <ul class="share">
          <li>
            <button class="good">いいね❤︎</button>
          </li>
          <li>
            <a href=""
              ><img src="img/logo/icon_twi.png" alt="ツイッターのアイコンです" class="twi"
            /></a>
          </li>
          <li>
            <a href=""><img src="img/logo/icon_fb.png" alt="Facebookのアイコンです" class="fb" /></a>
          </li>
          <li>
            <a href="">
              <img src="img/logo/icon_insta.png" alt="Instagramのアイコンです" class="insta"
            /></a>
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
          <div class="recom-article">
            <div class="recom-article-img">
              <a href="single-shop.html">
                <img src="img/img_single-blog.JPG" alt="おすすめ記事のサムネイルです" />
                <div class="recom-eye">なるちゅる</div>
                <button class="recom-good">❤︎</button>
              </a>
            </div>
            <a href="single-shop.html" class="article-link">
              <p class="recom-article-title">記事タイトル</p>
              <p class="recom-article-txt">テキストテキスト</p>
            </a>
          </div>

          <div class="recom-article">
            <div class="recom-article-img">
              <a href="single-shop.html">
                <img src="img/img_single-blog.JPG" alt="おすすめ記事のサムネイルです" />
                <div class="recom-eye">なるちゅる</div>
                <button class="recom-good">❤︎</button>
              </a>
            </div>
            <a href="single-shop.html" class="article-link">
              <p class="recom-article-title">記事タイトル</p>
              <p class="recom-article-txt">テキストテキスト</p>
            </a>
          </div>

          <div class="recom-article">
            <div class="recom-article-img">
              <a href="single-shop.html">
                <img src="img/img_single-blog.JPG" alt="おすすめ記事のサムネイルです" />
                <div class="recom-eye">なるちゅる</div>
                <button class="recom-good">❤︎</button>
              </a>
            </div>
            <a href="single-shop.html" class="article-link">
              <p class="recom-article-title">記事タイトル</p>
              <p class="recom-article-txt">テキストテキスト</p>
            </a>
          </div>

          <div class="recom-article">
            <div class="recom-article-img">
              <a href="single-shop.html">
                <img src="img/img_single-blog.JPG" alt="おすすめ記事のサムネイルです" />
                <div class="recom-eye">なるちゅる</div>
                <button class="recom-good">❤︎</button>
              </a>
            </div>
            <a href="single-shop.html" class="article-link">
              <p class="recom-article-title">記事タイトル</p>
              <p class="recom-article-txt">テキストテキスト</p>
            </a>
          </div>

          <div class="recom-article recom-article-last">
            <div class="recom-article-img">
              <a href="single-shop.html">
                <img src="img/img_single-blog.JPG" alt="おすすめ記事のサムネイルです" />
                <div class="recom-eye">なるちゅる</div>
                <button class="recom-good">❤︎</button>
              </a>
            </div>
            <a href="single-shop.html" class="article-link">
              <p class="recom-article-title">記事タイトル</p>
              <p class="recom-article-txt">テキストテキスト</p>
            </a>
          </div>
        </div>
        <!-- 記事内容(recom-cont)終わり -->
      </section>
      <!-- おすすめ記事recom-wrap終わり -->
    </main>
    <footer></footer>
  </body>
</html>
