<?php
/**
 * cone functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package cone
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cone_theme_setup() {
 
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'cone', get_template_directory() . '/languages' );
 
    // Register nav menues to use wp_nav_menu()
    register_nav_menus( array(
        'primary' => __( 'Primary menu', 'cone' ),
        'secondary' => __( 'Secondary menu', 'cone' ),
        'footer' => __( 'Footer menu', 'cone' )
    ) );
 
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    // Add thumb sizes below
    add_image_size( 'rectangle-thumb', 375, 220, true );

    /*
     * Enable support for Post Formats.
     * See https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );
 
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'cone_theme_setup' );

/**
 * Register custom post types
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cone_register_post_types() {
    // Custom post types should be registered here
}
add_action( 'init', 'cone_register_post_types' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cone_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'cone' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'cone_widgets_init' );

/**
 * Set the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove
 * the filter and add your own function tied to
 * the excerpt_length filter hook.
 *
 * @param int $length The number of excerpt characters.
 * @return int The filtered number of characters.
 */
function cone_set_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'cone_set_excerpt_length' );

/**
 * Replace "[...]" in the Read More link with an ellipsis.
 *
 * The "[...]" is appended to automatically generated excerpts.
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @param string $more The Read More text.
 * @return The filtered Read More text.
 */
function cone_excerpt_more( $more ) {
    if ( ! is_admin() ) {
        return ' &hellip;';
    }
    return $more;
}
add_filter( 'excerpt_more', 'cone_excerpt_more' );

/**
 * Add all the main scripts and styles here.
 */
function cone_enqueue_scripts() {

    // WordPress style.css
    wp_enqueue_style( 'default-style', get_stylesheet_uri() );

    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/lib/swiper.min.css' );

    wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/assets/js/lib/swiper.min.js', array('jquery'), 1.0, true );

    wp_enqueue_script( 'hamburger-scripts', get_template_directory_uri() . '/assets/js/lib/hamburger.js', array('jquery'), 1.0, true );

    wp_enqueue_style( 'hamburger-style', get_template_directory_uri() . '/assets/css/lib/hamburgers.min.css' );

    wp_enqueue_script( 'sharer-scripts', get_template_directory_uri() . '/assets/js/lib/sharer.min.js', array('jquery'), 1.0, true );

    // vendor.css created with gulp
    wp_enqueue_style( 'main-min-style', get_template_directory_uri() . '/assets/css/src/main.min.css' );

    // vendor.js created with gulp
    wp_enqueue_script( 'main-min-scripts', get_template_directory_uri() . '/assets/js/src/main.min.js', array('jquery'), 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'cone_enqueue_scripts' );

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';

//Do not wrap img in p tags
function filter_ptags_on_images($content){
    return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

//Blog pagination
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function language_selector_flags(){
    $languages = icl_get_languages('wpml_active_languages', NULL, 'skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
        }
    }
}