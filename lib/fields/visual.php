<?php
/*
 * Title:           Visual layout
 * Description:     Displays a row with a background image
 * Version:         v2.0.1
 *
 * Field Map:
 * image (image url)
 * toggle (button_group)
 *
 * Files:
 * templates/sections/visual.php
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_visual',
    'title' => __('Afbeelding'),
    'fields' => array(
      array(
        'key' => 'field_toggle',
        'label' => 'Visuele modus',
        'name' => 'toggle',
        'type' => 'button_group',
        'instructions' => 'Toon de afbeelding vrijstaand of over de volledige breedte van de pagina',
        'choices' => array(
          'contained' => 'Vrijstaand',
          'full' => 'Pagina breedte',
        ),
        'allow_null' => 0,
        'default_value' => 'full',
        'layout' => 'horizontal',
        'return_format' => 'value',
      ),
      array(
        'key' => 'field_image',
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
