<?php
/*
 * Title:           Pricing layout
 * Description:     Uses tabs to display multiple pricing tables
 * Docs:            https://getbootstrap.com/docs/4.0/components/navs/#javascript-behavior
 * Version:         v2.0.0
 *
 * Field Map:
 * title (text)
 * description (textarea)
 * pricing_items (repeater)
 *  - title (text)
 *  - image (image object)
 *  - list (repeater)
 *    - number (text)
 *    - label (text)
 *    - description (text)
 *    - price (text)
 *
 * Files:
 * templates/sections/pricing.php
 * templates/sections/parts/pricing-item.php
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
  	'key' => 'group_pricing',
  	'title' => 'Pricing',
  	'fields' => array(
  		array(
  			'key' => 'field_pricing_title',
  			'label' => 'Titel',
  			'name' => 'title',
  			'type' => 'text',
  		),
  		array(
  			'key' => 'field_pricing_desc',
  			'label' => 'Omschrijving',
  			'name' => 'description',
  			'type' => 'textarea',
  			'new_lines' => 'wpautop',
  		),
  		array(
  			'key' => 'field_pricing_items',
  			'label' => 'Prijslijsten',
  			'name' => 'pricing_items',
  			'type' => 'repeater',
  			'layout' => 'row',
        'collapsed' => 'field_pricing_item_title',
  			'button_label' => 'lijst toevoegen',
  			'sub_fields' => array(
          array(
      			'key' => 'field_pricing_item_title',
      			'label' => 'Titel',
      			'name' => 'title',
      			'type' => 'text',
      		),
  				array(
  					'key' => 'field_pricing_item_image',
  					'label' => 'Afbeelding',
  					'name' => 'image',
  					'type' => 'image',
  					'return_format' => 'array',
  					'preview_size' => 'thumbnail',
  					'library' => 'all',
  				),
  				array(
  					'key' => 'field_pricing_item_list',
  					'label' => 'Lijsten',
  					'name' => 'list',
  					'type' => 'repeater',
  					'layout' => 'table',
  					'sub_fields' => array(
              array(
          			'key' => 'field_pricing_item_nr',
          			'label' => 'Nr.',
          			'name' => 'number',
          			'type' => 'text',
          			'instructions' => 'Nummer van het menu item.',
          			'wrapper' => array(
          				'width' => '10',
          			),
          		),
          		array(
          			'key' => 'field_pricing_item_label',
          			'label' => 'Label',
          			'name' => 'label',
          			'type' => 'text',
          			'instructions' => 'Naam van het menu item.',
          			'wrapper' => array(
          				'width' => '30',
          			),
          		),
          		array(
          			'key' => 'field_pricing_item_desc',
          			'label' => 'Omschrijving',
          			'name' => 'description',
          			'type' => 'text',
          			'instructions' => 'Omschrijving van het menu item.',
          			'wrapper' => array(
          				'width' => '40',
          			),
          		),
          		array(
          			'key' => 'field_pricing_item_price',
          			'label' => 'Prijs',
          			'name' => 'price',
          			'type' => 'text',
          			'instructions' => 'Prijs van het menu item.',
          			'conditional_logic' => 0,
          			'wrapper' => array(
          				'width' => '10',
          			),
          		),
  					),
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
  	'active' => 0,
  ));

});
