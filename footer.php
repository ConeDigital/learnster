<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

    <footer class="max-width">
        <div class="footer-section">
            <div class="footer-item">
                <a href="<?php echo esc_url(home_url('/tjansten')); ?>"><?php _e('Tjänsten', 'skeleton'); ?></a>
                <a href="<?php echo esc_url(home_url('/om-oss')); ?>"><?php _e('Om oss', 'skeleton'); ?></a>
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>"><?php _e('Kontakt', 'skeleton'); ?></a>
                <a href="<?php echo esc_url(home_url('/boka-demo')); ?>"><?php _e('Boka demo', 'skeleton'); ?></a>
            </div>
            <div class="footer-item">
                <div class="footer-content">
                    <span><?php _e('Besöksadress', 'skeleton'); ?></span>
                    <p>Saltmätargatan 5, 113 59</p>
                    <p>Stockholm.</p>
                </div>
                <div class="footer-content">
                    <p>Copyright © Learnster AB.</p>
                    <p> All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class="footer-dropdown">
            <?php do_action('wpml_add_language_selector'); ?>
            <i class="material-icons">keyboard_arrow_down</i>
        </div>
    </footer>

    <?php wp_footer(); ?>

<script src="https://use.typekit.net/aga0lpy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>