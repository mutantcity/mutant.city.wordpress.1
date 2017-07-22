<?php


/**
 * Enqueue scripts
 */
function enqueueueue_scripts(){
  wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',
         node_modules_uri() . '/bootstrap/dist/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueueueue_scripts' );




/**
 * Enqueue styles.
 */
// terrible nameing wordpress.....you use wp_enqueue_scripts for both scripts and styles....
function enqueueueue_styles() {
  // custom style
  wp_enqueue_style('bootstrap',
         node_modules_uri() . '/bootstrap/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueueueue_styles' );

