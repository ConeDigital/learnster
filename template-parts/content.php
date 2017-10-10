<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package cone
 */
?>

<?php if ( is_page() ) : ?>

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

<?php elseif (is_single()) : ?>

    <section class="hero service-hero blog-hero"></section>
    <div class="max-width blog-cats">
        <?php $currentCat = get_the_category() ; ?>
        <?php
        $all_cat = get_categories();
        if ( ! empty( $all_cat ) && ! is_wp_error( $all_cat ) ) { ?>
            <?php foreach ($all_cat as $cat) :
                if( $cat->name == 'Okategoriserad' ){
                    continue;
                }?>
                <button class="category-button <?php if($currentCat[0]->name == $cat->name) : ?>active-cat<?php endif ; ?>" value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></button>
                <?php
            endforeach;
        }?>
    </div>
    <div class="max-width blog-featured-img">
        <img src="<?php the_post_thumbnail_url() ; ?>">
    </div>
    <div class="max-width blog-content">
        <p class="current-cat">
            <?php if ( ! empty( $currentCat ) ) {
                echo esc_html( $currentCat[0]->name );
            } ?>
        </p>
        <h1><?php the_title() ; ?></h1>
        <?php the_content() ; ?>
        <div class="author-content">
            <div class="author-img">
                <?php echo get_avatar( $id_or_email, $size, $default, $alt ); ?>
            </div>
            <div>
                <div>
                    <strong><?php the_author() ; ?>, </strong>
                    <span><?php the_author_meta('description') ; ?></span>
                </div>
                <p><?php echo get_the_date('n F Y') ; ?></p>
            </div>
        </div>
    </div>
    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'rand')); ?>
    <?php if ( $loop->have_posts() ) : ?>
    <div class="max-width other-posts">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="other-posts-grid">
                <a class="absolute-link" href="<?php the_permalink() ; ?>"></a>
                <div class="other-posts-img background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                <p><?php the_title() ; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
<?php else  : ?>

    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

<?php endif; ?>

