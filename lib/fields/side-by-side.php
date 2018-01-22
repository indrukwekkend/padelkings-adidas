<?php
/*
 * Title:           Side By Side layout
 * Description:     Display two columns, one containing an image, the other containing text. Has ability to toggle order.
 * Docs:            https://getbootstrap.com/docs/4.0/components/navs/#javascript-behavior
 * Version:         v2.0.0
 *
 * Field Map:
 * title (text)
 * lead (text)
 * tab #1
 *  - content (wysiwyg)
 *
 * tab #2
 *  - image (image object)
 *  - toggle (button_group)
 *
 * Files:
 * templates/sections/side-by-side.php
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
  'key' => 'group_side_by_side',
  'title' => __('Side By Side'),
  'fields' => array(
    array(
      'key' => 'field_side_by_side_tab_1',
      'label' => __('Tekst'),
      'type' => 'tab',
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array(
      'key' => 'field_cards_title',
      'label' => __('Titel'),
      'name' => 'title',
      'type' => 'text',
      'instructions' => '',
    ),
    array(
      'key' => 'field_cards_subtitle',
      'label' => __('Ondertitel'),
      'name' => 'lead',
      'type' => 'text',
      'instructions' => '',
    ),
    array(
      'key' => 'field_side_by_side_content',
      'label' => 'content',
      'name' => 'content',
      'type' => 'wysiwyg',
      'value' => NULL,
      'tabs' => 'all',
      'toolbar' => 'basic',
      'media_upload' => 1,
      'delay' => 1,
    ),
    array(
      'key' => 'field_side_by_side_tab_2',
      'label' => __('Afbeelding'),
      'type' => 'tab',
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array(
      'key' => 'field_side_by_side_image',
      'label' => __('Afbeelding'),
      'name' => 'image',
      'type' => 'image',
      'wrapper' => array(
        'width' => '70',
      ),
      'return_format' => 'array',
      'preview_size' => 'medium',
      'library' => 'all',
    ),
    array(
      'key' => 'field_side_by_side_toggle',
      'label' => 'Visuele modus',
      'name' => 'toggle',
      'type' => 'button_group',
      'instructions' => __('Afbeelding aan de linker- of rechterkant van de tekst tonen'),
      'choices' => array(
        'justify-content-between flex-row-reverse' => __('Links'),
        'justify-content-between' => __('Rechts'),
      ),
      'allow_null' => 0,
      'default_value' => 'full',
      'layout' => 'horizontal',
      'return_format' => 'value',
      'wrapper' => array(
        'width' => '30',
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
	'description' => '',
));
endif;
