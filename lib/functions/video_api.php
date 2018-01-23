<?php

namespace Roots\Sage\Functions\Video_API;

/*
 * @desc        Returns a embedable URL for iframes.
 *
 * @param       string  $video
 * @return      array   An array of video metadata if found
 */
function get_video_embed_url($video = null){

  if (!empty($video)):

    if (strpos($video, 'iframe') !== FALSE):

      $anchorRegex = '/src="(.*)?"/isU';

      $results = array();

      if (preg_match($anchorRegex, $video, $results)):

        $link = trim($results[1]);

      endif;

    else:

      $link = $video;

    endif;

    if (!empty($link)):

      $video_id = NULL;
      $videoIdRegex = NULL;
      $results = array();

      if (strpos($link, 'youtu') !== FALSE):

        if (strpos($link, 'youtube.com') !== FALSE):

          $videoIdRegex = '/youtube.com\/(?:embed|v){1}\/([a-zA-Z0-9_]+)\??/i';

        elseif (strpos($link, 'youtu.be') !== FALSE):

          $videoIdRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';

        endif;

        if ($videoIdRegex !== NULL):

          if (preg_match($videoIdRegex, $link, $results)):

            return "//youtube.com/embed/".$results[1];

          endif;

        endif;

      elseif (strpos($video, 'vimeo') !== FALSE):

        if (strpos($video, 'player.vimeo.com') !== FALSE):


          $videoIdRegex = '/player.vimeo.com\/video\/([0-9]+)\??/i';

        else:

          $videoIdRegex = '/vimeo.com\/([0-9]+)\??/i';

        endif;

        if ($videoIdRegex !== NULL):

          if (preg_match($videoIdRegex, $link, $results)):

            return "//player.vimeo.com/video/".$results[1];

          endif;

        endif;

      endif;

    endif;

  endif;

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
