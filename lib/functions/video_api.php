<?php

namespace Roots\Sage\Functions\Video_API;

/**
 * Given a string containing any combination of YouTube and Vimeo video URLs in
 * a variety of formats (iframe, shortened, etc), each separated by a line break,
 * parse the video string and determine it's valid embeddable URL for usage in
 * popular JavaScript lightbox plugins.
 *
 * In addition, this handler grabs both the maximize size and thumbnail versions
 * of video images for your general consumption. In the case of Vimeo, you must
 * have the ability to make remote calls using file_get_contents(), which may be
 * a problem on shared hosts.
 *
 * Data gets returned in the format:
 *
 * array(
 *   array(
 *     'url' => 'http://path.to/embeddable/video',
 *     'thumbnail' => 'http://path.to/thumbnail/image.jpg',
 *     'fullsize' => 'http://path.to/fullsize/image.jpg',
 *   )
 * )
 *
 * @param       string  $video
 * @return      array   An array of video metadata if found
 *
 * @author      Corey Ballou http://coreyballou.com
 * @copyright   (c) 2012 Skookum Digital Works http://skookum.com
 * @license
 */
function get_video_embed_url($video = null){
  
  if (!empty($video)) {

    // check for iframe to get the video url
    if (strpos($video, 'iframe') !== FALSE) {
      // retrieve the video url
      $anchorRegex = '/src="(.*)?"/isU';
      $results = array();
      if (preg_match($anchorRegex, $video, $results)) {
        $link = trim($results[1]);
      }
    } else {
      // we already have a url
      $link = $video;
    }

    // if we have a URL, parse it down
    if (!empty($link)) {

      // initial values
      $video_id = NULL;
      $videoIdRegex = NULL;
      $results = array();

      // check for type of youtube link
      if (strpos($link, 'youtu') !== FALSE) {
        if (strpos($link, 'youtube.com') !== FALSE) {
          // works on:
          // http://www.youtube.com/embed/VIDEOID
          // http://www.youtube.com/embed/VIDEOID?modestbranding=1&amp;rel=0
          // http://www.youtube.com/v/VIDEO-ID?fs=1&amp;hl=en_US
          $videoIdRegex = '/youtube.com\/(?:embed|v){1}\/([a-zA-Z0-9_]+)\??/i';
        } else if (strpos($link, 'youtu.be') !== FALSE) {
          // works on:
          // http://youtu.be/daro6K6mym8
          $videoIdRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
        }

        if ($videoIdRegex !== NULL) {
          if (preg_match($videoIdRegex, $link, $results)) {
            return "//youtube.com/embed/".$results[1];
          }
        }
      }

      // handle vimeo videos
      else if (strpos($video, 'vimeo') !== FALSE) {
        if (strpos($video, 'player.vimeo.com') !== FALSE) {
          // works on:
          // http://player.vimeo.com/video/37985580?title=0&amp;byline=0&amp;portrait=0
          $videoIdRegex = '/player.vimeo.com\/video\/([0-9]+)\??/i';
        } else {
          // works on:
          // http://vimeo.com/37985580
          $videoIdRegex = '/vimeo.com\/([0-9]+)\??/i';
        }

        if ($videoIdRegex !== NULL) {
          if (preg_match($videoIdRegex, $link, $results)) {
            return "//player.vimeo.com/video/".$results[1];
          }
        }
      }
    }
  }
  return null;
}

/**
 * Get video ID from URL
 *
 * @param string $url
 * @return mixed Video ID or FALSE if not found
 */
function get_video_id($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}
