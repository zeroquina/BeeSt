<?php

/**
* テーマのセットアップ
*
**/

function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

/**
* CSSとJsの読み込み
*
**/

function my_script_init()
{
wp_enqueue_style( 'google_webfont', '//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c', array() );
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', array(), '5.15.1', 'all');
wp_enqueue_style( 'animations', get_template_directory_uri() . '/src/WOW/animate.css' );

if( !is_single() && !is_category() && !is_tag() && !is_date() && !is_search() ) {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
} else {
  wp_enqueue_style( 'style-other', get_template_directory_uri() . '/css/style-other.css', array(), '1.0.0', 'all');
}

if( is_front_page() ) {
  wp_enqueue_style('index', get_template_directory_uri() . '/css/index.css', array('style'), '1.0.0', 'all');
} elseif( is_home() ) {
  wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css', array('style'), '1.0.0', 'all');
} elseif ( is_single() ) {
  wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css', array('style-other'), '1.0.0', 'all');
} elseif ( is_tag() ) {
  wp_enqueue_style('tag', get_template_directory_uri() . '/css/tag.css', array('style-other'), '1.0.0', 'all');
} elseif ( is_date() ) {
  wp_enqueue_style('date', get_template_directory_uri() . '/css/date.css', array('style-other'), '1.0.0', 'all');
} elseif ( is_category() ) {
  wp_enqueue_style('category', get_template_directory_uri() . '/css/archive.css', array('style-other'), '1.0.0', 'all');
} elseif ( is_page('service') ) {
  wp_enqueue_style('service', get_template_directory_uri() . '/css/service.css', array('style'), '1.0.0', 'all');
} elseif ( is_page('about') ) {
  wp_enqueue_style('aboutcss', get_template_directory_uri() . '/css/about.css', array('style'), '1.0.0', 'all');
} elseif ( is_page('contact') ) {
  wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css', array('style'), '1.0.0', 'all');
} elseif ( is_page('answer') ) {
  wp_enqueue_style('answer', get_template_directory_uri() . '/css/answer.css', array('style'), '1.0.0', 'all');
} elseif ( is_search() ) {
  wp_enqueue_style('search', get_template_directory_uri() . '/css/search.css', array('style-other'), '1.0.0', 'all');
} elseif ( is_404() ) {
  wp_enqueue_style('404', get_template_directory_uri() . '/css/404.css', array('style'), '1.0.0', 'all');
} else {
  wp_enqueue_style('secret', get_template_directory_uri() . '/css/secret.css', array('style'), '1.0.0', 'all');
}

if( !is_single() && !is_category() && !is_tag() && !is_date() && !is_search() ) {
  wp_enqueue_script('js', get_template_directory_uri() . '/src/js/script.js', array( 'jquery' ), '1.0.0', true); 
} else {
  wp_enqueue_script( 'js-other', get_template_directory_uri() . '/src/js/script-other.js', array( 'jquery' ), '1.0.0', true);
}
    
wp_enqueue_script( 'wow', get_template_directory_uri() .  '/src/WOW/wow.min.js', array( 'jquery' ), null,true );
wp_enqueue_script( 'wow-init', get_template_directory_uri() .  '/src/WOW/wow.init.js', array( 'jquery' ), null,true );
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* 遅延読み込みの削除（Lazy Load）
*
*/

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );


/**
* メニュー登録
*
*/

function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
'footer' => 'フッターメニュー',
)
);
}
add_action('init', 'my_menu_init');


/**
* アーカイブのタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

  if ( is_category() ) { // カテゴリーアーカイブの場合
  $title = single_cat_title( '', false );
  } elseif ( is_tag() ) { // タグアーカイブの場合
  $title = single_tag_title( '', false );
  } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
  $title = post_type_archive_title( '', false );
  } elseif ( is_tax() ) { // タームアーカイブの場合
  $title = single_term_title( '', false );
  } elseif ( is_author() ) { // 作者アーカイブの場合
  $title = get_the_author();
  } elseif ( is_date() ) { // 日付アーカイブの場合
  $title = '';
  if ( get_query_var( 'year' ) ) {
  $title .= get_query_var( 'year' ) . '年';
  }
  if ( get_query_var( 'monthnum' ) ) {
  $title .= get_query_var( 'monthnum' ) . '月';
  }
  if ( get_query_var( 'day' ) ) {
  $title .= get_query_var( 'day' ) . '日';
  }
  }
  return $title;
  };
  add_filter( 'get_the_archive_title', 'my_archive_title' );

/**
* 検索結果から固定ページを除外する
* @param string $search SQLのWHERE句の検索条件文
* @param object $wp_query WP_Queryのオブジェクト
* @return string $search 条件追加後の検索条件文
*/

function my_posts_search( $search, $wp_query ){
  //検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
if ( $wp_query->is_search() && $wp_query->is_main_query() && !is_admin() ){
    // 検索結果を投稿タイプに絞る
  $search .= " AND post_type = 'post' ";
  return $search;
}
  return $search;
}
add_filter('posts_search','my_posts_search', 10, 2);
