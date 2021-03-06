<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="hachisu">
  <meta name="description" content="阿波うどん運動は徳島県特有の「なるちゅるうどん」
「たらいうどん」を中心に徳島県の美味しいうどんを
紹介するサイトです。あなたも徳島県で自分好みの
うどんに出会ってください。">
  <title>阿波うどん運動</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/common.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/header.css" />
  <!-- 各ページのCSSファイルを作成しパスを記述してください。 -->

  <?php
  if (is_front_page()) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/front-page.css" rel="stylesheet">
  <?php
  } elseif (is_singular('post')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-blog.css" rel="stylesheet">
  <?php } elseif (is_page('noodle')) {  ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-noodle.css" rel="stylesheet">
  <?php } elseif (is_page('privacy')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-privacy.css" rel="stylesheet">
  <?php } elseif (is_page('writer')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-writer.css" rel="stylesheet">
  <?php } elseif (is_page('favorite')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } elseif (is_post_type_archive('shop')) {  ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } elseif (is_post_type_archive('course')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } elseif (is_category('special')) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } elseif (is_singular('course')) {  ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-course.css" rel="stylesheet">
  <?php } elseif (is_singular('shop')) {  ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-shop.css" rel="stylesheet">
  <?php } elseif (is_tax('shop_type')) {  ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } elseif (is_404()) { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } else { ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive.css" rel="stylesheet">
  <?php } ?>


  <?php
  // wp_head()アクションを実行する
  wp_head();
  ?>
</head>

<body>
  <header class="header">
    <!-- -------------------------------------
      ----------------sp版ヘッダー---------------
    ----------------------------------------- -->

    <section class="header-sp">
      <button class="header-fav-btn" type="button" onclick="location.href='<?php echo home_url('/favorite/') ?>'">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_header_mypage.png" alt="" />
      </button>

      <div class="header-logo-wrap">
        <h1>
          <a href="<?php echo home_url(); ?>">
            <img class=header-logo-img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-wh-small.png" alt="阿波うどん運動" />
          </a>
        </h1>
      </div>

      <button id="hamburgerarea" class="openbtn">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </section>

    <!-------------- ハンバーガーメニュー中身 --------------->

    <nav id="hamburgerIn" class="hamburger-inner-nav hamburgerIn">
      <!-- <div class="hamburger-flex"> -->
      <ul class="nav-sp-ul">
        <li class="nav-sp-item">
          <a href="<?php echo home_url('/noodle/'); ?>"> 徳島の麺事情 </a>
        </li>
        <li class="nav-sp-item"><a href="#"> お店紹介 </a></li>
        <li class="nav-sp-item nav-sp-shop"><a href="<?php echo home_url('/archives/shop_type/tarai'); ?>"> たらいうどん</a></li>
        <li class="nav-sp-item nav-sp-shop">
          <a href="<?php echo home_url('/archives/shop_type/naruchuru'); ?>"> なるちゅるうどん</a>
        </li>
        <li class="nav-sp-item nav-sp-shop">
          <a href="<?php echo home_url('/archives/shop_type/honkakuha'); ?>"> 本格派うどん</a>
        </li>
        <li class="nav-sp-item nav-sp-sh-sp-item"><a href="<?php echo home_url('/archives/course'); ?>"> モデルコース</a></li>

        <li class=" nav-sp-item"><a href=<?php echo home_url('/archives/category/special'); ?>"> 特集 </a></li>
      </ul>
      <!-- </div> -->
      <span class="snsul-sp-title">SNS</span>
      <ul class="hamburger-sns-ul">
        <li class="sp-sns-item">
          <a href="https://twitter.com/awa_udon">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_twi.png" alt="Twitter" />
          </a>
        </li>
        <li class="sp-sns-item">
          <a href="https://www.pinterest.jp/awaudonundou/_saved/">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_pint.png" alt="Pintarest" />
          </a>
        </li>
        <li class="sp-sns-item">
          <a href="https://instagram.com/awa_udon?utm_medium=copy_link">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_footer_insta.png" alt="instagram" />
          </a>
        </li>
      </ul>
    </nav>

    <!-- -------------------------------------
      ----------------pc版ヘッダー---------------
    ----------------------------------------- -->

    <section class="header-pc">
      <div class="header-logo-wrap">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-wh-small.png" alt="阿波うどん運動" />
        </a>
      </div>

      <nav class="header-nav-pc">
        <ul class="nav-pc-ul">
          <li class="nav-pc-item">
            <a href="<?php echo home_url('/noodle/'); ?>"> 徳島の麺事情 </a>
          </li>
          <li class="nav-pc-item"><a href="<?php echo home_url('/archives/shop_type/tarai'); ?>"> たらいうどん </a></li>
          <li class="nav-pc-item"><a href="<?php echo home_url('/archives/shop_type/naruchuru'); ?>"> なるちゅるうどん </a></li>
          <li class="nav-pc-item"><a href="<?php echo home_url('/archives/shop_type/honkakuha'); ?>"> 本格派うどん </a></li>
          <li class="nav-pc-item"><a href="<?php echo home_url('/archives/course'); ?>"> モデルコース </a></li>
          <li class="nav-pc-item"><a href="<?php echo home_url('/archives/category/special'); ?>"> 特集 </a></li>
          <li class="header-fav-btn">
            <button class="header-fav-btn" type="button" onclick="location.href='<?php echo home_url('/favorite/') ?>'">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_header_mypage.png" alt="" />
            </button>
          </li>
        </ul>
      </nav>
    </section>
  </header>
