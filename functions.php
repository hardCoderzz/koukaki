<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    wp_register_script('animation-script', get_stylesheet_directory_uri() . '/js/animations.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_register_script('carousel-script', get_stylesheet_directory_uri() . '/js/carousel.js', array('jquery', 'swiper-js'), '1.0', true);
    wp_enqueue_script('animation-script');
    wp_enqueue_script('carousel-script');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
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