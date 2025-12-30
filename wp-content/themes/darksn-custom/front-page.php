<?php get_header(); ?>

<section class="hero-slider-area">
    <div class="swiper myHeroSwiper">
        <div class="swiper-wrapper">
            
            <?php 
                // Panelden veriyi çek, yoksa varsayılan bir resim/yazı koy
                $s1_img = get_theme_mod('slide1_image', get_template_directory_uri() . '/assets/images/default.jpg'); 
                $s1_title = get_theme_mod('slide1_title', 'Markanızı Dijitalde Büyütün');
            ?>
            <div class="swiper-slide" style="background-image: url('<?php echo esc_url($s1_img); ?>');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="slide-content">
                        <h2 class="animate-text"><?php echo esc_html($s1_title); ?></h2>
                        <p class="animate-text delay-100">Web tasarım ve yazılım çözümleriyle yanınızdayız.</p>
                        <a href="#iletisim" class="btn btn-primary animate-btn delay-200">Teklif Alın</a>
                    </div>
                </div>
            </div>

            <?php 
                $s2_img = get_theme_mod('slide2_image', get_template_directory_uri() . '/assets/images/default2.jpg'); 
                $s2_title = get_theme_mod('slide2_title', 'Yaratıcı Çözümler');
            ?>
            <div class="swiper-slide" style="background-image: url('<?php echo esc_url($s2_img); ?>');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="slide-content">
                        <h2 class="animate-text"><?php echo esc_html($s2_title); ?></h2>
                        <p class="animate-text delay-100">Modern tasarım anlayışı ile fark yaratın.</p>
                        <a href="#portfolio" class="btn btn-primary animate-btn delay-200">Projelerimiz</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php get_footer(); ?>