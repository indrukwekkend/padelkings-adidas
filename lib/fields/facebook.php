<?php
/*
* Title:           Facebook layout Add-on
* Description:     Displays a Facebook image and a Facebook post
* Version:         v1.0.0
*
* Field Map:
* content (textarea)
*
* Files:
* templates/sections/facebook.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_facebook',
    'title' => __('Facebook'),
    'fields' => array(
      array(
        'key' => 'field_display_title',
        'label' => __('Inhoud'),
        'name' => 'content',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'basic',
        'delay' => 1,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 0,
    'description' => __('Layout: Facebook'),
  ));
});
