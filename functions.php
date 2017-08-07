<?php
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
// メニューの有効化
add_theme_support( 'menus' );




// クラスを削除して、表示中メニューに 'current' クラスを付与する
add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );
function my_custom_nav( $classes, $item ) {

    //     $classes を空にする前にカスタムクラスを変数へ入れておく
    if( !empty( $classes[0] ) ){
        $custom_class = esc_attr( $classes[0] );
    }

    $classes = array();
    if( $item -> current == true ) {
        $classes[] = 'current';
    }
    // 先に変数に入れておいたカスタムクラス名を配列へ入れる
    if( !empty( $custom_class ) ){
        $classes[] = $custom_class;
    }
    return $classes;
}

// ID を削除する
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){
    return $id = array();
}
