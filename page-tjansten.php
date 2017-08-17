<?php get_header() ; ?>

<section class="service-hero">
    <div class="service-hero-content max-width">
        <?php the_content() ; ?>
    </div>
    <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/service-hero.png' ) ); ?>">
</section>
<section class="service-half-section">
    <img src="<?php the_field('service-first-img') ?>">
    <div class="max-width medium-width service-half">
        <div class="service-half-content">
            <?php the_field('service-first-text') ?>
        </div>
    </div>
</section>
<section class="half-section max-width half-section-img">
    <div class="half-contents">
        <?php the_field('service-second-text') ?>
    </div>
    <div class="half-contents">
        <img src="<?php the_field('service-second-img') ?>">
    </div>
</section>
<section class="half-grey-section">
    <div class="half-section max-width half-section-img half-reverse">
        <div class="half-contents">
            <img src="<?php the_field('service-third-img') ?>">
        </div>
        <div class="half-contents half-contents-flex">
            <div class="half-small-content">
                <?php the_field('service-third-text') ?>
            </div>
        </div>
    </div>
</section>
<section class="three-col-section">
    <div class="max-width big-width big-img"><img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/bigdevice.png' ) ); ?>"></div>
    <div class="max-width three-row">
        <?php if( have_rows('service-perks') ): ?>
            <?php while( have_rows('service-perks') ) : the_row();?>
                <div class="three-col">
                    <?php the_sub_field('service-perk') ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<section class="max-width end-section">
    <?php the_field('service-last-text') ?>
    <div class="hero-buttons">
        <a href="#">Boka demo</a>
        <a href="#">Kontakta oss</a>
    </div>
</section>



<?php get_footer() ; ?>