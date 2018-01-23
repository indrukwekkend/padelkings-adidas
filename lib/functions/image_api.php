<?php

namespace Roots\Sage\Image_API;

/**
 * Get image tag from image object(ACF)
 *
 * @param array $image
 * @param string $size
 * @param string $class
 * @return string html image tag
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

/**
 * Get url from image object(ACF)
 *
 * @param array $image
 * @param string $size
 * @return string url (string)
 */
function get_image_url( $image, $size = 'thumbnail'){

  if( is_array($image) ){
    return $image['sizes'][ $size ];
  }

  return '<span class="alert alert-danger">'.__('$image is geen array').'</span>';
}
