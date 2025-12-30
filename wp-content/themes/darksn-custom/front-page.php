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
<section class="about-section section-padding" id="hakkimizda">
    <div class="container">
        <div class="about-wrapper">
            
            <div class="about-image">
                <?php 
                    $about_img = get_theme_mod('about_image', get_template_directory_uri() . '/assets/images/about-default.jpg'); 
                ?>
                <img src="<?php echo esc_url($about_img); ?>" alt="Hakkımızda">
                <div class="counter-box about-counter-on-image">
                    <div class="counter-number" id="happyCustomers">0</div>
                    <div class="counter-label">Mutlu Müşteri</div>
                </div>
            </div>

            <div class="about-content">
                <h6 class="sub-title about-animate fade-in-up">HİKAYEMİZ</h6>
                <h2 class="about-animate fade-in-up delay-1"><?php echo esc_html(get_theme_mod('about_title', 'Biz Kimiz?')); ?></h2>
                <div class="text-content about-animate fade-in-up delay-2">
                    <p><?php echo nl2br(esc_html(get_theme_mod('about_text', 'Dijital dünyada markanızı büyütmek için buradayız.'))); ?></p>
                </div>
             <ul class="feature-list">
                    <?php 
                        // Verileri çekelim
                        $feat1 = get_theme_mod('about_feature_1', 'Profesyonel Kadro');
                        $feat2 = get_theme_mod('about_feature_2', '7/24 Destek');
                        $feat3 = get_theme_mod('about_feature_3', 'Son Teknoloji');
                    ?>

                    <?php if ( ! empty($feat1) ) : ?>
                        <li class="feature-animated"><span class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle class="feature-circle" cx="12" cy="12" r="11" stroke="#ff8a00" stroke-width="2"/><polyline class="feature-check" points="7,13 11,17 17,9" stroke="#ff8a00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></span><?php echo esc_html($feat1); ?></li>
                    <?php endif; ?>

                    <?php if ( ! empty($feat2) ) : ?>
                        <li class="feature-animated"><span class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle class="feature-circle" cx="12" cy="12" r="11" stroke="#ff8a00" stroke-width="2"/><polyline class="feature-check" points="7,13 11,17 17,9" stroke="#ff8a00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></span><?php echo esc_html($feat2); ?></li>
                    <?php endif; ?>

                    <?php if ( ! empty($feat3) ) : ?>
                        <li class="feature-animated"><span class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle class="feature-circle" cx="12" cy="12" r="11" stroke="#ff8a00" stroke-width="2"/><polyline class="feature-check" points="7,13 11,17 17,9" stroke="#ff8a00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></span><?php echo esc_html($feat3); ?></li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>