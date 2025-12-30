
<?php get_header(); ?>

<section class="hero-section">
  <?php
    $slider_query = new WP_Query([
      'post_type' => 'slider',
      'posts_per_page' => 5
    ]);
    if ($slider_query->have_posts()) {
      echo '<div class="slider-wrapper">';
      while ($slider_query->have_posts()) {
        $slider_query->the_post();
        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        echo '<div class="slide">';
        if ($image) {
          echo '<img src="' . esc_url($image) . '" alt="' . esc_attr(get_the_title()) . '" />';
        }
        echo '<div class="slide-content">';
        echo '<h2>' . get_the_title() . '</h2>';
        echo '<p>' . get_the_excerpt() . '</p>';
        $button_text = get_post_meta(get_the_ID(), 'button_text', true);
        $button_url = get_post_meta(get_the_ID(), 'button_url', true);
        if ($button_text && $button_url) {
          echo '<a class="slider-btn" href="' . esc_url($button_url) . '">' . esc_html($button_text) . '</a>';
        }
        echo '</div>';
        echo '</div>';
      }
      echo '</div>';
      wp_reset_postdata();
    } else {
      echo '<div class="hero-fallback">Slider eklemek için admin panelinden içerik ekleyin.</div>';
    }
  ?>
</section>

<section id="services" class="services">
  <div class="service-card">Web Tasarım</div>
  <div class="service-card">SEO Optimizasyon</div>
  <div class="service-card">Animasyon & UI/UX</div>
</section>

<?php get_footer(); ?>
