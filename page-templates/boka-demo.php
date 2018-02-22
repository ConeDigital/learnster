<?php
/**
 * Template Name: Boka demo
 */
?>
<?php get_header() ; ?>

    <section class="book-hero">
        <div class="book-hero-content max-width">
            <img src="https://www.learnster.com/wp-content/uploads/2017/09/bookdemo.png">
            <div>
                <?php the_content() ; ?>
            </div>
        </div>
    </section>
    <section class="book-form max-width">
        <?php  echo do_shortcode(get_field('book-form')) ; ?>
    </section>

<?php get_footer() ; ?>