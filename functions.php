<?php
// javascriptの接続
function my_script() {
  wp_enqueue_script (
    'myscript',
    get_template_directory_uri() . '/portfolio_2.js',
    array(),
    false,
    true
  );
}

add_action('wp_enqueue_scripts', 'my_script');



// アイキャッチ画像
add_action('init',function() {
  add_theme_support('post-thumbnails');
});


if(is_category()){
  //現在のカテゴリIDを取得
  global $cat;
  //現在のカテゴリ情報を取得
  $cat_data = get_category( $cat );
  //親カテゴリがあるか判別
  if($cat_data->category_parent){
   //親カテゴリIDを取得
   $parent_id = $cat_data->category_parent;
   //親カテゴリ情報を取得
   $parent_data = get_category($parent_id);
   //親カテゴリ名を取得
   $parent_name = $parent_data->name;
  }
}