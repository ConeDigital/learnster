<?php
/**
 * Template Name: Om oss
 */
?>
<?php get_header() ; ?>

    <section class="hero medium-hero about-hero">
        <div class="max-width">
            <div class="hero-content">
                <img class="blockq-img" src="https://www.learnster.com/wp-content/uploads/2017/09/blockq.png">
                <?php the_content() ; ?>
            </div>
        </div>
    </section>
    <section class="about-top-section">
        <div class="max-width about-top">
            <div class="about-top-left">
                <h3><?php the_field('about-left') ; ?></h3>
            </div>
            <div class="about-top-right">
              <?php the_field('about-right') ; ?>
            </div>
        </div>
    </section>
    <section class="about-team-section">
        <div class="team-section">
            <h3>Vårt team</h3>
            <div class="team-grid" >
                <?php if( have_rows('team') ): ?>
                    <?php while( have_rows('team') ) : the_row();?>
                        <div class="team-card">
                            <div class="team-card-img background-img" style="background-image: url('<?php the_sub_field('team-img') ; ?>')"></div>
                            <div class="team-card-content">
                                <h4><?php the_sub_field('team-name') ; ?></h4>
                                <p><?php the_sub_field('team-text') ; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="max-width end-section">
        <?php the_field('service-last-text') ?>
        <div class="hero-buttons">
            <a href="<?php echo esc_url(home_url('/boka-demo')); ?>"><?php _e('Boka demo', 'skeleton'); ?></a>
            <a href="<?php echo esc_url(home_url('kontakt')); ?>"><?php _e('Kontakta oss', 'skeleton'); ?></a>
        </div>
    </section>
<?php get_footer() ; ?>