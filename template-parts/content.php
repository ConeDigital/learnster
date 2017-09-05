<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package cone
 */
?>

<?php if ( is_single() || is_page() ) : ?>

    <section class="hero small-hero">
        <div class="max-width">
            <div class="hero-content">
                <h1><?php the_title() ; ?></h1>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="max-width page-width">
            <?php the_content(); ?>
        </div>
    </section>

<?php else : ?>

        the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    
<?php endif; ?>

