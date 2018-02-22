<?php
/**
 * Template Name: Kontakt
 */
?>
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
                    <h5><?php _e('Telefon', 'skeleton'); ?></h5>
                    <p>+ 46 70 431 4816</p>
                    <p>Mikael Larsson, CEO</p>
                </div>
                <div class="contact-info-content">
                    <h5>E-mail</h5>
                    <a href="maltio:mikael.larsson@learnster.com">mikael.larsson@learnster.com</a>
                </div>
                <div class="contact-info-content">
                    <h5><?php _e('Adress', 'skeleton'); ?></h5>
                    <p>Saltmätargatan 5,</p>
                    <p>113 59 Stockholm</p>
                    <p>Sweden</p>
                    <a class="map-link" target="_blank" href="https://www.google.se/maps/place/Saltm%C3%A4targatan+5,+113+59+Stockholm/@59.3393122,18.056316,17z/data=!3m1!4b1!4m5!3m4!1s0x465f9d661ded74ad:0x4d799f68b6e11998!8m2!3d59.3393122!4d18.0585047"><?php _e('Se Karta', 'skeleton'); ?></a>
                </div>
            </div>
            <div class="contact-map">
                <img src="https://www.learnster.com/wp-content/uploads/2017/09/map.png">
            </div>
        </div>
    </section>
<?php get_footer() ; ?>