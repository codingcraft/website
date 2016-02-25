<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Get page slug
 */
function get_page_slug() {
  global $post;
  return $post->post_name;
}

/**
 * Create ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

/**
 * Remove pages in WP-Admin
 */
function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', __NAMESPACE__ . '\\remove_menus' );
