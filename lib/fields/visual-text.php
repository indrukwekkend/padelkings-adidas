<?php
/*
 * Title:           Visual layout
 * Description:     Displays a row with a background image
 * Version:         v2.0.2
 *
 * Field Map:
 * toggle (button_group)
 * title (text)
 * image (image url)
 *
 * Files:
 * templates/sections/visual.php
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_visual_text',
    'title' => __('Afbeelding'),
    'fields' => array(

      array(
        'key' => 'field_side_by_side_content',
        'label' => 'content',
        'name' => 'content',
        'type' => 'wysiwyg',
        'value' => NULL,
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 1,
      ),

      array(
        'key' => 'field_visual_image',
        'label' => __('Afbeelding'),
        'name' => 'image',
        'type' => 'image',
        'instructions' => __('Kies een afbeelding'),
        'return_format' => 'url',
        'preview_size' => 'large',
        'library' => 'all',
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
    'description' => __('Layout: Visual'),
  ));
});
