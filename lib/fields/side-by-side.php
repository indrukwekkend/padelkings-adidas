<?php
/*
 * Title:           Side By Side layout
 * Description:     Display two columns, one containing an image, the other containing text. Has ability to toggle order.
 * Docs:            https://getbootstrap.com/docs/4.0/components/navs/#javascript-behavior
 * Version:         v3.0.0
 *
 * Field Map:
 * title (text)
 * lead (text)
 * media (button_group)
 *
 * tab #1
 *  - content (wysiwyg)
 *
 * tab #2
 *  - image (image object)
 *  - toggle (button_group)
 *
 * tab #3
 *  - video_title (text)
 *  - video_url (text)
 *  - ratio (select)
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
      'key' => 'field_side_by_side_title',
      'label' => __('Titel'),
      'name' => 'title',
      'type' => 'text',
      'instructions' => '',
      'wrapper' => array(
        'width' => '70',
      ),
    ),
    array(
      'key' => 'field_side_by_side_media_toggle',
      'label' => 'Media Type',
      'name' => 'media_toggle',
      'type' => 'button_group',
      'choices' => array(
        'image' => __('Afbeelding'),
        'video' => __('Video'),
      ),
      'allow_null' => 0,
      'default_value' => 'image',
      'layout' => 'horizontal',
      'return_format' => 'value',
      'wrapper' => array(
        'width' => '30',
      ),
    ),
    array(
      'key' => 'field_side_by_side_subtitle',
      'label' => __('Ondertitel'),
      'name' => 'lead',
      'type' => 'text',
      'instructions' => '',
      'wrapper' => array(
        'width' => '70',
      ),
    ),

    array(
      'key' => 'field_side_by_side_visual_toggle',
      'label' => 'Visuele modus',
      'name' => 'visual_toggle',
      'type' => 'button_group',
      'instructions' => __('Media aan de linker- of rechterkant van de tekst tonen'),
      'choices' => array(
        'justify-content-between flex-row-reverse' => __('Links'),
        'justify-content-between' => __('Rechts'),
      ),
      'allow_null' => 0,
      'default_value' => 'justify-content-between',
      'layout' => 'horizontal',
      'return_format' => 'value',
      'wrapper' => array(
        'width' => '30',
      ),
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
      'conditional_logic' => array(
				array(
					array(
						'field' => 'field_side_by_side_media_toggle',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
    ),
    array(
      'key' => 'field_side_by_side_image_title',
      'label' => __('Titel'),
      'name' => 'image_title',
      'type' => 'text',
      'instructions' => '',
    ),
    array(
      'key' => 'field_side_by_side_image',
      'label' => __('Afbeelding'),
      'name' => 'image',
      'type' => 'image',
      'return_format' => 'array',
      'preview_size' => 'medium',
      'library' => 'all',
    ),

    array(
      'key' => 'field_side_by_side_tab_3',
      'label' => __('Video'),
      'type' => 'tab',
      'placement' => 'top',
      'endpoint' => 0,
      'conditional_logic' => array(
				array(
					array(
						'field' => 'field_side_by_side_media_toggle',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
    ),
    array(
      'key' => 'field_cards_video_url',
      'label' => __('Video URL'),
      'name' => 'url',
      'type' => 'text',
      'instructions' => __('Voer hier de URL in van de video'),
      'wrapper' => array(
        'width' => '60',
      ),
    ),

    array(
      'key' => 'field_side_by_side_ratio',
      'label' => 'Video Verhouding',
      'name' => 'ratio',
      'type' => 'select',
      'instructions' => __('henkie'),
      'choices' => array(
        'embed-responsive-21by9' => __('21:9'),
        'embed-responsive-16by9' => __('16:9'),
        'embed-responsive-4by3' => __('4:3'),
        'embed-responsive-1by1' => __('1:1'),
      ),
      'allow_null' => 0,
      'default_value' => 'embed-responsive-16by9',
      'layout' => 'horizontal',
      'return_format' => 'value',
      'wrapper' => array(
        'width' => '20',
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
