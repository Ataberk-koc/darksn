<?php

// CSS & JS yükleme
function darksn_scripts() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
 // Mevcut stil dosyanız
    wp_enqueue_style( 'darksn-style', get_stylesheet_uri() );

    // 1. Swiper CSS (CDN üzerinden)
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );

    // 2. Swiper JS (CDN üzerinden)
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

    // 3. Kendi JS dosyanız (Slider'ı burada başlatacağız)
    // Eğer dosyanızın adı farklıysa düzeltin (örneğin assets/js/main.js)
    wp_enqueue_script( 'darksn-main-js', get_template_directory_uri() . '/assets/js/main.js', array('swiper-js'), null, true );
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

function darksn_slider_customizer( $wp_customize ) {
    // 1. Yeni Bir Bölüm Oluştur (Slider Ayarları)
    $wp_customize->add_section( 'darksn_slider_section', array(
        'title'       => __( 'Ana Sayfa Slider', 'darksn' ),
        'description' => 'Slider resimlerini ve yazılarını buradan değiştirebilirsiniz.',
        'priority'    => 30,
    ) );

    // --- SLIDE 1 AYARLARI ---
    
    // Resim Yükleme Alanı
    $wp_customize->add_setting( 'slide1_image' ); // Ayar ismi
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide1_image', array(
        'label'    => __( '1. Slayt Resmi', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'settings' => 'slide1_image',
    ) ) );

    // Başlık Yazısı Alanı
    $wp_customize->add_setting( 'slide1_title', array('default' => 'Varsayılan Başlık') );
    $wp_customize->add_control( 'slide1_title', array(
        'label'    => __( '1. Slayt Başlığı', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'type'     => 'text',
    ) );
    
    // --- SLIDE 1 İÇİN AÇIKLAMA AYARI ---
    $wp_customize->add_setting( 'slide1_desc', array('default' => 'Varsayılan açıklama metni...') );
    $wp_customize->add_control( 'slide1_desc', array(
        'label'    => __( '1. Slayt Açıklaması', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'type'     => 'textarea', // Uzun yazı yazılabilsin diye
    ) );

    // --- SLIDE 2 İÇİN AÇIKLAMA AYARI ---
    $wp_customize->add_setting( 'slide2_desc', array('default' => 'İkinci slayt açıklaması...') );
    $wp_customize->add_control( 'slide2_desc', array(
        'label'    => __( '2. Slayt Açıklaması', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'type'     => 'textarea',
    ) );
    // --- SLIDE 2 AYARLARI (İstersen çoğaltabilirsin) ---
    
    $wp_customize->add_setting( 'slide2_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide2_image', array(
        'label'    => __( '2. Slayt Resmi', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'settings' => 'slide2_image',
    ) ) );

    $wp_customize->add_setting( 'slide2_title', array('default' => 'İkinci Başlık') );
    $wp_customize->add_control( 'slide2_title', array(
        'label'    => __( '2. Slayt Başlığı', 'darksn' ),
        'section'  => 'darksn_slider_section',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'darksn_slider_customizer' );