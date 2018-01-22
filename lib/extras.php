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

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return;
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Lees verder', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/*
* Image Resource Handler
*/
function get_image_tag( $image, $size = 'thumbnail', $class = null ){

  if( is_array($image) ){
    $url = 'src="'.$image['sizes'][ $size ].'"';
    $title = 'title="'.$image['title'].'"';
    $alt = 'alt="'.$image['alt'].'"';
    $class = 'class="'.$class.'"';
    return "<img $class $url $title $alt />";
  }

  return '<span class="alert alert-danger">'.__('$image is geen array').'</span>';
}

/*
* Image Resource Handler
*/
function get_image_url( $image, $size = 'thumbnail'){

  if( is_array($image) ){
    return $image['sizes'][ $size ];
  }

  return '<span class="alert alert-danger">'.__('$image is geen array').'</span>';
}
