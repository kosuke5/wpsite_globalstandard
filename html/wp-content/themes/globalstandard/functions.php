<?php
/**
  テーマのセットアップ
 */
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

  // add_image_size('single_thumb', 760, 475, TRUE);
}

add_action('after_setup_theme', 'my_setup');

/**
  Styleの読み込み
 */
function my_script_init(){
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css', array(), '5.15.2', 'all');
  wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);

  if(is_front_page()){
    wp_enqueue_style('front-page', get_template_directory_uri().'/css/page/style_front-page.css', array('reset', 'fontawesome'), '1.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri().'/css/plugin/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_script('slick', get_template_directory_uri().'/js/plugin/slick.min.js', array('jquery'), '1.0.0', true);
  }
  elseif(is_page('about')){
    wp_enqueue_style('page-about', get_template_directory_uri().'/css/page/style_page-about.css', array('reset', 'fontawesome'), '1.0.0', 'all' );
  }
  elseif(is_page('service')){
    wp_enqueue_style('page-service', get_template_directory_uri().'/css/page/style_page-service.css', array('reset', 'fontawesome'), '1.0.0', 'all' );
  }
  elseif(is_page('case')){
    wp_enqueue_style('page-case', get_template_directory_uri().'/css/page/style_page-case.css', array('reset', 'fontawesome'), '1.0.0', 'all' );
  }
  elseif(is_page('download')){
    wp_enqueue_style('page-download', get_template_directory_uri().'/css/page/style_page-download.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
  elseif(is_page('download-thanks')){
    wp_enqueue_style('page-download-thanks', get_template_directory_uri().'/css/page/style_page-download-thanks.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
  elseif(is_page('contact')){
    wp_enqueue_style('page-contact', get_template_directory_uri().'/css/page/style_page-contact.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
  elseif(is_page('contact-thanks')){
    wp_enqueue_style('page-contact-thanks', get_template_directory_uri().'/css/page/style_page-contact-thanks.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
  elseif(is_home() || is_archive()){
    wp_enqueue_style('news', get_template_directory_uri().'/css/page/style_home.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
  elseif(is_single()){
    wp_enqueue_style('single', get_template_directory_uri().'/css/page/style_single.css', array('reset', 'fontawesome'), '1.0.0', 'all');
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
  メニューバーの登録
*/
function register_my_menus(){
register_nav_menus(
  array(
    'header-menu' => __('ヘッダーメニュー'),
    'drawer-menu' => __('ドロワーメニュー'),
  )
);
}
add_action('init', 'register_my_menus');

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
}
add_filter('get_the_archive_title', 'my_archive_title');