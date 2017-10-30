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
        <div class="share-section">
            <div class="sharer social-icon-box" data-sharer="facebook" data-width="800" data-height="600" data-title="Checkout Sharer.js!" data-url="<?php the_permalink(); ?>" style="background-color: #1164BB;">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <div class="sharer social-icon-box"  data-sharer="twitter" data-width="800" data-height="600" data-title="Checkout Sharer.js!" data-url="<?php the_permalink(); ?>" style="background-color: #1BA6FF;">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="sharer social-icon-box" data-sharer="email" data-url="<?php the_permalink(); ?>" data-subject="Nytt inlägg från Learnster" style="background-color: #E5362E;">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="sharer social-icon-box" data-sharer="linkedin" data-width="800" data-height="600" data-title="Checkout Sharer.js!" data-url="<?php the_permalink(); ?>" style="background-color: #0077B5;">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
        </div>
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

