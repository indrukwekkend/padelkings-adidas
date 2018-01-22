<?php
/*
 * Gravity Forms layout
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_gravityforms',
    'title' => __('Gravity Forms'),
    'fields' => array(
      array(
        'key' => 'field_gravityforms_id',
        'label' => __('Gravity Forms'),
        'name' => 'gravityform_id',
        'type' => 'forms',
        'instructions' => __('Kies een Gravity Forms formulier'),
        'required' => 1,
        'return_format' => 'id',
        'allow_null' => 0,
        'multiple' => 0,
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
    'description' => __('Koppeling met Gravityforms'),
  ));

});
