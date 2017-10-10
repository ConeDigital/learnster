<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo esc_url(home_url( '/wp-content/themes/learnster/assets/images/learnsterfavo.png' ) ); ?>">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="max-width header">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="https://www.learnster.com/wp-content/uploads/2017/09/newlearnster.png">
            </a>
            <div class="header-content">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
                <div id="flags_language_selector"><?php language_selector_flags(); ?></div >
            </div>
            <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </header>
    <section class="mobile-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
    </section>