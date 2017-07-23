<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */


// easy functions to get asset URLs
function js_uri(){
  return get_template_directory_uri() . '/assets/js';
}
function css_uri(){
  return get_template_directory_uri() . '/assets/css';
}
function vendor_uri(){
  return get_template_directory_uri() . '/assets/vendor';
}
function node_modules_uri(){
  return get_template_directory_uri() . '/node_modules';
}




// custom defined template tags
require get_template_directory() . '/includes/template_tags.php';
// theme support declarations
require get_template_directory() . '/includes/theme_support.php';
// styles and scripts
require get_template_directory() . '/includes/enqueue_assets.php';
// Register widgets
require get_template_directory() . '/includes/register_widgets.php';
// Register menus
require get_template_directory() . '/includes/register_menus.php';
// Get custom comment callbacks/walkers
require get_template_directory() . '/includes/customize_comment_list.php';
// Get custom comment callbacks/walkers
require get_template_directory() . '/includes/customize_comment_form.php';
// Just various other customization not fitting in above categories.
require get_template_directory() . '/includes/addl_theme_customization.php';

// register our bootstrap nav walker
// via the glorius: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once(get_template_directory() . '/walkers/wp-bootstrap-navwalker.php');












