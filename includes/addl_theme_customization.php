<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

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

function remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset)
    { $end = strpos($link, '"',$offset); }
  if ($end)
    { $link = substr_replace($link, '', $offset, $end-$offset); }
  return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

