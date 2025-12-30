<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO: Dinamik Başlık ve Açıklama -->
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

  <!-- Open Graph Meta Etiketleri -->
  <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo home_url( add_query_arg( null, null ) ); ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">

  <!-- Twitter Card Meta Etiketleri -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">

    <!-- LOGO -->
    <div class="logo">
      <?php
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
        }
      ?>
    </div>

    <!-- Hamburger Menü Butonu (Mobilde) -->
    <button class="hamburger" aria-label="Menüyü Aç/Kapat" aria-expanded="false" aria-controls="main-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- MENÜ -->
    <nav class="main-nav" id="main-menu">
      <?php
        wp_nav_menu([
          'theme_location' => 'main_menu',
          'container' => false,
          'menu_class' => 'menu'
        ]);
      ?>
    </nav>

  </div>
</header>
<script>
window.addEventListener("scroll", () => {
  const header = document.querySelector(".site-header");
  if (!header) return;
  header.classList.toggle("scrolled", window.scrollY > 80);
});
</script>
