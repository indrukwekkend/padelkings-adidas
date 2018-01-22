<?php
/*
* Title:           Columns layout
* Description:     Displays up to 4 columns of content
* Docs:            https://getbootstrap.com/docs/4.0/layout/grid/
* Version:         v2.1.0
*
* Field Map:
* title (text)
* items (repeater)
* - title (text)
* - content (text)
*
* Files:
* templates/sections/columns.php
* templates/sections/parts/columns-item.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_columns',
    'title' => __('Columns'),
    'fields' => array(
      array(
        'key' => 'field_columns_title',
        'label' => __('Titel'),
        'name' => 'title',
        'type' => 'text',
        'instructions' => '',
      ),
      array(
        'key' => 'field_columns_lead',
        'label' => __('Ondertitel'),
        'name' => 'lead',
        'type' => 'text',
        'instructions' => '',
      ),
      array(
        'key' => 'field_columns_items',
        'label' => __('Kolom'),
        'name' => 'items',
        'type' => 'repeater',
        'instructions' => 'Maak hier kolomen aan. Word getoond van links naar rechts (1-4)',
        'min' => 1,
        'max' => 4,
        'layout' => 'table',
        'button_label' => __('Kolom toevoegen'),
        'sub_fields' => array(
          array(
            'key' => 'field_column_item_content',
            'label' => __('Tekst'),
            'name' => 'content',
            'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'delay' => 1,
          ),
        ),
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
    'description' => __('Layout: Columns'),
  ));
});
