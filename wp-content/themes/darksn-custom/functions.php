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
