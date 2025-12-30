<?php

// CSS & JS yükleme
function darksn_scripts() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'darksn_scripts');

// Menü desteği
function darksn_theme_setup() {
  register_nav_menus([
    'main_menu' => "Ana Menü"
  ]);
}
add_action('after_setup_theme', 'darksn_theme_setup');
// SEO title kontrolü
add_filter('pre_get_document_title', function () {
    if (is_front_page()) {
        return get_bloginfo('name') . ' | Dijital Ajans & Yaratıcı Çözümler';
    }
    return get_the_title() . ' | ' . get_bloginfo('name');
});
// Özel logo desteği
function darksn_custom_logo_setup() {
    $defaults = array(
        'height'      => 100, // Logonun varsayılan yüksekliği
        'width'       => 400, // Logonun varsayılan genişliği
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'darksn_custom_logo_setup' );

function darksn_menu_setup() {
    register_nav_menus( array(
        'primary_menu' => __( 'Ana Menü', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'darksn_menu_setup' );

// Slider için özel yazı tipi
function darksn_register_slider_post_type() {
  $labels = array(
    'name'               => 'Slider',
    'singular_name'      => 'Slider',
    'add_new'            => 'Yeni Slider',
    'add_new_item'       => 'Yeni Slider Ekle',
    'edit_item'          => 'Sliderı Düzenle',
    'new_item'           => 'Yeni Slider',
    'all_items'          => 'Tüm Sliderlar',
    'view_item'          => 'Sliderı Görüntüle',
    'search_items'       => 'Slider Ara',
    'not_found'          => 'Slider bulunamadı',
    'not_found_in_trash' => 'Çöp kutusunda slider yok',
    'menu_name'          => 'Slider'
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'has_archive'        => false,
    'menu_icon'          => 'dashicons-images-alt2',
    'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'show_in_rest'       => true
  );
  register_post_type('slider', $args);
}
add_action('init', 'darksn_register_slider_post_type');