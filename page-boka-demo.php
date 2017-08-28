<?php get_header() ; ?>

    <section class="book-hero">
        <div class="book-hero-content max-width">
            <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/bookdemo.png' ) ); ?>">
            <div>
                <?php the_content() ; ?>
            </div>
        </div>
    </section>
    <section class="book-form max-width">
        <?php echo do_shortcode('[contact-form-7 id="97" title="Boka demo"]') ; ?>
    </section>

<?php get_footer() ; ?>