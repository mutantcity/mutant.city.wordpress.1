<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function _s_content_width() {
//  $GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
// }

// add_action( 'after_setup_theme', '_s_content_width', 0 );



// this is hackery to add a class to the first paragraph of the_content()
// apparently, this is how it's done in wordpress...
function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="the_content">', $content, 1);
}
add_filter('the_content', 'first_paragraph');


// Adds snippet custom post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'p_hackery_snippets',
    array(
      'labels' => array(
        'name' => __( 'Snippets' ),
        'singular_name' => __( 'Snippet' ),
        'add_new_item' => __('Add New Snippet'),
        'edit_item' => __('Edit Snippet')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'categories'),
      'rewrite' => array('slug' => 'snippets'),
      'taxonomies'          => array( 'category', 'post_tag' ),
    )
  );
}

// Adds custom posts types to any categories archive
// http://www.wpbeginner.com/wp-tutorials/how-to-add-categories-to-a-custom-post-type-in-wordpress/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'movies'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}