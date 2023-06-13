<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    wp_register_script('animation-script', get_stylesheet_directory_uri() . '/assets/js/animations.js', array(), '1.0', true);
    
    wp_register_script('carousel-script', get_stylesheet_directory_uri() . '/assets/js/carousel.js', array('swiper-js'), '1.0', true);
    wp_enqueue_script('animation-script');
    wp_enqueue_script('carousel-script');
    wp_register_script('menu-script', get_stylesheet_directory_uri() . '/assets/js/menu.js', array(), '1.0', true);
    wp_enqueue_script('menu-script');
    wp_register_script('title-script', get_stylesheet_directory_uri() . '/assets/js/titles-animation.js', array(), '1.0', true);
    wp_enqueue_script('title-script');
    wp_register_script('parallax-script', get_stylesheet_directory_uri() . '/assets/js/parallax-logo.js', array(), '1.0', true);
    wp_enqueue_script('parallax-script');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'navigation-style', get_stylesheet_directory_uri() . '/assets/css/navigation.css', array('parent-style'));
    wp_enqueue_style( 'characters-slider-style', get_stylesheet_directory_uri() . '/assets/css/characters-slider.css', array('parent-style'));
    wp_enqueue_style('animation-style', get_stylesheet_directory_uri() . '/assets/css/animations.css', array('parent-style'));
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array('parent-style'));
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js' );
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    
}


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}