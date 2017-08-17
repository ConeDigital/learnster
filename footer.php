<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

    <footer class="max-width">
        <div class="footer-item">
            <a href="<?php echo esc_url(home_url('/tjansten')); ?>">Tjänsten</a>
            <a href="#">Blogg</a>
            <a href="#">Om oss</a>
            <a href="#">Kontakt</a>
        </div>
        <div class="footer-item">
            <div class="footer-content">
                <span>Besöksadress</span>
                <p>Saltmätargatan 5, 113 59</p>
                <p>Stockholm.</p>
            </div>
            <div class="footer-content">
                <p>Copyright © Learnster AB.</p>
                <p> All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

<script src="https://use.typekit.net/aga0lpy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>