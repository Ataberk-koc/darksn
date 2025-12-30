<?php get_header(); ?>

<section class="hero-slider-area">
    <div class="swiper myHeroSwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg');">
                <div class="overlay"></div> <div class="container">
                    <div class="slide-content">
                        <h2 class="animate-text">Markanızı Dijitalde Büyütün</h2>
                        <p class="animate-text delay-100">Web tasarım ve yazılım çözümleriyle yanınızdayız.</p>
                        <a href="#iletisim" class="btn btn-primary animate-btn delay-200">Teklif Alın</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" style="background-image: url('https://picsum.photos/1920/1080');"> <div class="overlay"></div>
                <div class="container">
                    <div class="slide-content">
                        <h2 class="animate-text">Yaratıcı Çözümler</h2>
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