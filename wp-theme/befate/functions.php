<?php
/**
 * Befate Corporate Theme - functions.php
 */

// テーマサポート
function befate_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    // ナビゲーションメニュー登録
    register_nav_menus(array(
        'primary'  => 'ヘッダーナビゲーション',
        'mobile'   => 'モバイルメニュー',
        'footer'   => 'フッターナビゲーション',
    ));
}
add_action('after_setup_theme', 'befate_setup');

// CSS・JS読み込み
function befate_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts-noto',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap',
        array(),
        null
    );

    // メインCSS
    wp_enqueue_style(
        'befate-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('google-fonts-noto'),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // メインJS
    wp_enqueue_script(
        'befate-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'befate_enqueue_assets');

// Google Fonts preconnect
function befate_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'befate_preconnect_google_fonts', 1);

// 画像パスのヘルパー関数
function befate_image($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}
