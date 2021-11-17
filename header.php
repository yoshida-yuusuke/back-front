<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>阿波うどん運動</title>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/common.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/header.css" rel="stylesheet">

    <!-- ここからページにあったCSSをあてる -->
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
    <?php } elseif (is_post_type_archive('shop')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive-shop.css" rel="stylesheet">
    <?php } elseif (is_post_type_archive('course')) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive-course.css" rel="stylesheet">
    <?php } elseif (is_singular('course')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-course.css" rel="stylesheet">
    <?php } elseif (is_singular('shop')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-shop.css" rel="stylesheet">
    <?php } elseif (
        is_tax('shop_type')
    ) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/taxsonomy-shop_type.css" rel="stylesheet">
    <?php }
    ?>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/front-page.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/styles.min.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
    <?php
    // wp_head()アクションを実行する
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>

    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo@2x.png" alt="AWA UDON UNDO"></a></h1>
            </div>
        </div>

        <ul>
            <li><a href="<?php echo home_url('/noodle/'); ?>">
                    徳島の麺類事情</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/naruchuru'); ?>">鳴ちゅるうどん</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/tarai'); ?>">たらいうどん</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/honkakuha'); ?>">本格派うどん</a></li>
            <li><a href="<?php echo home_url('/archives/course'); ?>">モデルコース</a></li>
            <li><a href="<?php echo home_url('/archives/category/special'); ?>">特集</a></li>
        </ul>

        </div>
    </header>
