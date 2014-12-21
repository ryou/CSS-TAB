<?php

// アイキャッチ画像のサポート
add_theme_support('post-thumbnails');

// カスタムメニューのサポート
register_nav_menu('sample_nav', 'サンプルナビ');

/***********************************
サイドバーウィジット

// コード例
$args = array(
          // ※値はデフォ値
          // 管理画面に表示するサイドバー名
          'name'          => sprintf(__('Sidebar %d'), $i ),
          // サイドバーid(英数小文字かつ長くないものを)
          'id'            => 'sidebar-$i',
          // 管理画面に表示するサイドバーの説明
          'description'   => ''
          // ウィジェットを囲むタグの設定
          'before_widget' => '<li id="%1$s" class="widget %2$s">',
          'after_widget'  => '</li>',
          // ウィジェットのタイトルが入る要素のタグの設定
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>'
        );
register_sidebar( $args );

// 出力
li.widget
  h2.widgettitle 管理画面で設定したウィジェットタイトル
  ul
    li
      a href="~" 内容
    ~
 ***********************************/
register_sidebar( array(
  'name'          => 'サンプルサイドバー',
  'id'            => 'sample_sidebar',
  'description'   => 'サイドバーのサンプル',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
) );

?>