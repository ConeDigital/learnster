<?php
/**
 * Template Name: Blogg
 */
?>
<?php get_header() ; ?>

    <section class="hero service-hero blog-hero"></section>
    <div class="max-width blog-cats">
        <?php
        $all_cat = get_categories();
        if ( ! empty( $all_cat ) && ! is_wp_error( $all_cat ) ) { ?>
            <button class="category-button filter-button all-button active-cat" value="allt">Allt</button>
            <?php foreach ($all_cat as $cat) :
                if( $cat->name == 'Okategoriserad' ){
                    continue;
                }?>
                <button class="category-button filter-button" value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></button>
                <?php
            endforeach;
        }?>
    </div>
    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4, 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) ); ?>
    <?php if ( $loop->have_posts() ) : ?>
        <div class="max-width blog-grid-section">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php
                $categories = '';
                foreach(get_the_category() as $category) {
                    $categories .= $category->slug . ' ';
                }
                ?>
                <div class="blog-grid <?php echo $categories; ?>">
                    <a class="absolute-link" href="<?php the_permalink() ; ?>"></a>
                    <div class="blog-grid-img background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                    <div class="blog-grid-content">
                        <span><?php echo $categories; ?></span>
                        <h3><?php the_title() ; ?></h3>
                        <p><?php the_excerpt() ; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <div class="max-width pagination-section">
        <?php pagination_bar( $loop ); ?>
    </div>

<?php get_footer() ; ?>