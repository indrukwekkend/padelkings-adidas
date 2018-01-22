<?php
/*
* Title:           Display layout
* Description:     Displays a large title and subtitle
* Docs:            http://getbootstrap.com/docs/4.0/content/typography/#display-headings
* Version:         v2.0.0
*
* Field Map:
* type (select)
* title (text)
* lead (text)
*
* Files:
* templates/sections/display.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_display',
    'title' => __('Display'),
    'fields' => array(
      array(
        'key' => 'field_display_type',
        'label' => 'Letter grootte',
        'name' => 'type',
        'type' => 'select',
        'instructions' => __('Kies een letter grootte uit'),
        'wrapper' => array(
          'width' => '25',
        ),
        'choices' => array(
          'display-1' => 'Type 1',
          'display-2' => 'Type 2',
          'display-3' => 'Type 3',
          'display-4' => 'Type 4',
        ),
        'default_value' => array(
          'display-1' => 'Type 1',
        ),
        'return_format' => 'value',
      ),
      array(
  			'key' => 'field_display_title',
  			'label' => 'Titel',
  			'name' => 'title',
  			'type' => 'text',
        'instructions' => __('Voer een titel in'),
        'wrapper' => array(
          'width' => '75',
        ),
  		),
      array(
  			'key' => 'field_display_lead',
  			'label' => 'Ondertitel',
  			'name' => 'lead',
  			'type' => 'text',
        'instructions' => __('Voer een ondertitel in'),
        'wrapper' => array(
          'width' => '100',
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
