<?php


/**
 * Register all menus so they appear in the Dashboard and Admin can edit them
 */
// function register_my_menus() {
//   // register_nav_menus(
//   //   array(
//   //   'header-nav-bar' => __( 'Header Menu' ),
//   //   )
//   // );
// }
// add_action( 'init', 'register_my_menus' );


register_nav_menus(
    [
      'main-nav-menu' => __( 'Main Nav Menu' )
    ]
  );

//add_action( 'init', 'register_my_menus' );