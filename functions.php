<?php

if (!function_exists('bistrocalme_setup')) :
    function bistrocalme_setup()
    {
        /**
         * <title>タグを出力する
         */
        add_theme_support('title-tag');
        /**
         * アイキャッチ画像を使用可能にする
         */
        add_theme_support('post-thumbnails');
        /**
         * カスタムメニュー機能を使用可能にする
         */
        add_theme_support('menus');
    }
endif;
add_action('after_setup_theme', 'bistrocalme_setup');


function bistrocalme_scripts()
{
    //fontawesome
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');

    //独自のリセットスタイルシートを読み込む
    // wp_enqueue_style('bistrocalme-reset', 'get_template_directory_uri() . '/assets/css/reset.css');

    // JQueryライブラリを読み込む
    // wp_enqueue_script('jquery');


    // if (is_home()) {
    //     wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/@1.8.1/slick/slick.css', '', '1.0', true);
    //     wp_enqueue_script('slick-carouse2', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '1.0', true);
    //     wp_enqueue_script('bistro_calme-home', get_template_directory_uri() . '/assets/js/home.js', '', '1.0', true);
    // }
}
add_action('wp_enqueue_scripts', 'bistrocalme_scripts');



/**
 * <title> タグを出力する
 */
add_theme_support('title-tag');

/**
 * Undocumented function
 *
 * @param string $separator
 * @return string
 */
function my_document_title_separator($separator): string
{
    // print_r($separator);
    $separator = '★';
    return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

/**
 * <title>タグの内容をカスタマイズする
 *
 * @param array $title
 * @return array
 */
function my_document_title_parts($title): array
{
    // print_r($title);
    if (is_home()) {
        unset($title['tagline']);  //タグラインを削除
        $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
    }
    return $title;
}
add_filter('document_title_parts', 'my_document_title_parts');

add_theme_support('post-thumbnails');

add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields($args)
{
    $args['author'] = ''; //   「名前」を削除
    $args['email'] = ''; //   「メールアドレス」を削除
    $args['url'] = ''; //   「サイト」を削除
    return $args;
}

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    //  管理画面、メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    //トップページの場合
    if ($query->is_home()) {
        //トップページの表示条件を指定する
        $query->set('posts_per_page', 3);
        $query->set('category_name', 'news');
        return;
    }
}

add_action('wp', 'my_wpautop');
function my_wpautop()
{
    if (is_page('contact')) {
        remove_filter('the_content', 'wpautop');
    }
}

// ウィジェットエリアの登録
function custom_widget_register()
{
    register_sidebar(array(
        'name'    =>  'サイドバーウィジェットエリア',
        'id'      =>  'sidebar-widget',
        'description'   =>  'ブログページのサイドバーに表示されます。',
        'before_widget'   =>  '<div id="%1$s" class="c-widget %2$s">',
        'after_widget'   =>  '</div>',
        'before_title'   =>  '<h2 class="c-widget__title">',
        'after_title'   =>  '</h2>'
    ));
}
add_action('widgets_init', 'custom_widget_register');

//randの重複の対処


session_start();

add_filter('posts_orderby', 'randomise_with_pagination');
function randomise_with_pagination($orderby)
{

    if (
        is_post_type_archive("shop") || is_tax('shop_type')
    ) {

        // Reset seed on load of initial archive page
        if (!get_query_var('paged') || get_query_var('paged') == 0 || get_query_var('paged') == 1) {
            if (isset($_SESSION['seed'])) {
                unset($_SESSION['seed']);
            }
        }

        // Get seed from session variable if it exists
        $seed = false;
        if (isset($_SESSION['seed'])) {
            $seed = $_SESSION['seed'];
        }

        // Set new seed if none exists
        if (!$seed) {
            $seed = rand();
            $_SESSION['seed'] = $seed;
        }

        // Update ORDER BY clause to use seed
        $orderby = 'RAND(' . $seed . ')';
    }

    return $orderby;
}







//
//指定した「うどんの種類」の店舗投稿についているタグ一覧を取得する関数
//
function getTerms_UdonType($udontype)
{

    $ret_arr = array();
    $args = array(
        'post_type' => array('shop'), // 取得する投稿タイプのスラッグ
        'tax_query' => array(
            array(
                'taxonomy' => 'shop_type',
                'field' => 'slug',
                'terms' => $udontype,
            )
        )
    );
    $my_posts = get_posts($args);

    foreach ($my_posts as $post) : setup_postdata($post);
        $terms = get_the_terms($post->ID, 'shop_tag');
        if (!empty($terms)) {
            foreach ($terms as $term) :
                if (!my_array_unique($ret_arr, $term)) {
                    array_push($ret_arr, $term);
                }
            endforeach;
        }
    endforeach;

    wp_reset_postdata();

    return $ret_arr;
}
//$arrの配列内に、$termと同じ名称のタグがあるかどうか
function my_array_unique($arr, $term)
{
    $unique_flg = false;
    if (is_array($arr)) {
        foreach ($arr as $arr_elem) :
            if (strcmp($arr_elem->name, $term->name) == 0) {
                $unique_flg = true;
                break;
            }
        endforeach;
    }
    return $unique_flg;
}
