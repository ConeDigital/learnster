<?php get_header() ; ?>

    <div class="lightbox">
        <i class="material-icons close-lightbox">cancel</i>
        <iframe src="<?php the_field('lightbox-video') ; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
<section class="hero">
    <div class="max-width home-hero">
        <div class="hero-content">
            <?php the_content() ; ?>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/tjansten')); ?>"><?php _e('Berätta mer', 'skeleton'); ?></a>
                <a class="open-lightbox"><?php _e('Se vår film', 'skeleton'); ?></a>
            </div>
        </div>
    </div>
    <img class="tablet-img" src="<?php the_post_thumbnail_url() ; ?>">
</section>
<div class="max-width partners-section">
    <a target="_blank" href="http://www.stardustconsulting.se/">
        <img src="https://learnster.com/wp-content/uploads/2017/09/stardust.png">
    </a>
    <a target="_blank" href="http://legalworks.se/">
        <img src="https://learnster.com/wp-content/uploads/2017/09/legal-works.png">
    </a>
    <a target="_blank" href="http://www.keytraining.se/">
        <img src="https://learnster.com/wp-content/uploads/2017/09/key.png">
    </a>
    <a target="_blank" href="http://www.ecutbildning.se/">
        <img src="https://learnster.com/wp-content/uploads/2017/09/ec-utbildning.png">
    </a>
    <a target="_blank" href="http://peopletransition.com/">
        <img src="https://learnster.com/wp-content/uploads/2017/09/peopletransition.png">
    </a>
</div>
<section class="box-layout-section">
    <div class="max-width box-layout">
        <div class="box-layout-content">
            <h2><?php the_field('home-first-headline') ; ?></h2>
            <p><?php the_field('home-first-text') ; ?></p>
            <a class="regular-link" href="<?php echo esc_url(home_url('/boka-demo')); ?>"><?php _e('Få mer tid över till att utbilda', 'skeleton'); ?> <i class="material-icons">trending_flat</i></a>
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
        <a class="regular-link" href="<?php echo esc_url(home_url('/tjansten')); ?>"><?php _e('Hur då? Berätta mer ', 'skeleton'); ?><i class="material-icons">trending_flat</i></a>
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
        <h3><?php _e('Håll dig uppdaterad med de senaste utbildningstrenderna!', 'skeleton'); ?></h3>
        <?php echo do_shortcode('[mc4wp_form id="126"]') ; ?>
    </div>
</section>

<?php get_footer() ; ?>