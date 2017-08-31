<?php get_header() ; ?>

<section class="hero">
    <div class="max-width">
        <div class="hero-content">
            <?php the_content() ; ?>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/tjansten')); ?>">Berätta mer</a>
                <a target="_blank" href="https://vimeo.com/220769146">Se vår film</a>
            </div>
        </div>
    </div>
    <img class="tablet-img" src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/tablet.png' ) ); ?>">
</section>
<div class="max-width partners-section">
    <a target="_blank" href="http://www.stardustconsulting.se/">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/stardust.png' ) ); ?>">
    </a>
    <a target="_blank" href="http://legalworks.se/">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/legal-works.png' ) ); ?>">
    </a>
    <a target="_blank" href="http://www.keytraining.se/">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/key.png' ) ); ?>">
    </a>
    <a target="_blank" href="http://www.ecutbildning.se/">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/ec-utbildning.png' ) ); ?>">
    </a>
    <a target="_blank" href="http://peopletransition.com/">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/peopletransition.png' ) ); ?>">
    </a>
</div>
<section class="box-layout-section">
    <div class="max-width box-layout">
        <div class="box-layout-content">
            <h2><?php the_field('home-first-headline') ; ?></h2>
            <p><?php the_field('home-first-text') ; ?></p>
            <a class="regular-link" href="<?php echo esc_url(home_url('/boka-demo')); ?>">Få mer tid över till att utbilda <i class="material-icons">trending_flat</i></a>
        </div>
        <div class="box-layout-img background-img" style="background-image: url('<?php the_field('home-first-img') ; ?>')"></div>
    </div>
</section>
<section class="half-section max-width">
    <div class="half-contents">
        <img src="<?php the_field('home-second-img') ; ?>">
    </div>
    <div class="half-contents">
        <h2><?php the_field('home-second-text') ; ?></h2>
        <a class="regular-link" href="<?php echo esc_url(home_url('/tjansten')); ?>">Hur då? Berätta mer <i class="material-icons">trending_flat</i></a>
    </div>
</section>
<section class="swiper-section">
    <div class="swiper-top-section">
        <div class="swiper-container swiper-top max-width medium-width">
            <div class="swiper-wrapper">
                <?php if( have_rows('slider') ): ?>
                    <?php while( have_rows('slider') ) : the_row();?>
                        <div class="swiper-slide is-selected">
                            <img src="<?php the_sub_field('slider-icon') ; ?>">
                            <p><?php the_sub_field('slider-headline') ; ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="swiper-container swiper-bottom">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ) : the_row();?>
                    <div class="swiper-slide background-img" style="background-image:url('<?php the_sub_field('slider-background') ; ?>')">
                        <div class="max-width swiper-bottom-slide">
                            <div class="swiper-bottom-content">
                                <?php the_sub_field('slider-content') ; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="home-contact">
    <div class="max-width medium-width">
        <h3>Håll dig uppdaterad med de senaste utbildningstrenderna!</h3>
        <?php echo do_shortcode('[mc4wp_form id="108"]') ; ?>
    </div>
</section>

<?php get_footer() ; ?>