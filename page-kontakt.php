<?php get_header() ; ?>

    <section class="hero small-hero">
        <div class="max-width">
            <div class="hero-content">
                <?php the_content() ; ?>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="max-width medium-width">
            <div class="contact-info">
                <div class="contact-info-content">
                    <h5>Telefon</h5>
                    <p>+ 46 70 431 4816</p>
                </div>
                <div class="contact-info-content">
                    <h5>E-mail</h5>
                    <a href="maltio:info@learnster.com">info@learnster.com</a>
                </div>
                <div class="contact-info-content">
                    <h5>Adress</h5>
                    <p>Saltmätargatan 5,</p>
                    <p>113 59 Stockholm</p>
                    <p>Sweden</p>
<!--                    <a href="#">Se karta</a>-->
                </div>
            </div>
            <div class="contact-map">
                <img src="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/map.png' ) ); ?>">
            </div>
        </div>
    </section>
<?php get_footer() ; ?>