<?php

add_theme_support( 'title-tag' );
add_theme_support( 'html5', [
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
]);
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );


function widgetarea_init() {
    register_sidebar(array(
        'name'=>'サイドバー',
        'id' => 'side-widget',
        'before_widget'=>'<aside id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget'=>'</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );

register_sidebar();
