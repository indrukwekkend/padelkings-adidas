<?php
/*
 * Title:           Google Maps Multi layout
 * Description:     Displays multiple markers in Google Maps
 * Version:         v1.0.0
 *
 * Field Map:
 * title (text)
 * lead (text)
 * items (repeater)
 * - title (text)
 * - description (text)
 * - location (location)
 *
 * Files:
 * templates/sections/maps.php
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_google_maps_multi',
    'title' => __('Google Maps'),
    'fields' => array(
      array(
  			'key' => 'field_maps_multi_title',
  			'label' => __('Titel'),
  			'name' => 'title',
  			'type' => 'text',
        'instructions' => __('Voer een titel in'),
        'wrapper' => array(
          'width' => '70',
        ),
  		),
      array(
        'key' => 'field_maps_multi_height',
        'label' => __('Hoogte van de kaart'),
        'instructions' => __('Voer de gewenste hoogte in'),
        'name' => 'height',
        'type' => 'number',
        'default_value' => 400,
        'append' => 'px',
        'wrapper' => array(
          'width' => '30',
        ),
      ),
      array(
  			'key' => 'field_maps_multi_lead',
  			'label' => __('Ondertitel'),
  			'name' => 'lead',
  			'type' => 'text',
        'instructions' => __('Voer een ondertitel in'),
        'wrapper' => array(
          'width' => '70',
        ),
  		),
      array(
  			'key' => 'field_maps_multi_zoom',
  			'label' => __('Zoom van de kaart'),
        'instructions' => __('Voer de gewenste zoom in (1-20)'),
  			'name' => 'zoom',
  			'type' => 'number',
        'default_value' => 10,
        'append' => 'px',
        'wrapper' => array(
          'width' => '30',
        ),
        'min' => 1,
        'max' => 20,
        'step' => 1,
  		),
      array(
        'key' => 'field_maps_multi_items',
        'label' => __('Locaties'),
        'name' => 'items',
        'type' => 'repeater',
        'instructions' => '',
        'min' => 1,
        'layout' => 'row',
        'collapsed' => 'field_maps_multi_item_title',
        'button_label' => __('Locatie toevoegen'),
        'sub_fields' => array(
          array(
            'key' => 'field_maps_multi_item_title',
            'label' => __('Marker titel'),
            'name' => 'title',
            'type' => 'text',
            'instructions' => __('Voer hier de tekst in voor wanneer er op de marker word geklikt'),
          ),
          array(
            'key' => 'field_maps_multi_item_description',
            'label' => __('Marker omschrijving'),
            'name' => 'description',
            'type' => 'text',
            'instructions' => __('Voer hier de tekst in voor wanneer er op de marker word geklikt'),
          ),
          array(
            'key' => 'field_maps_multi_item_location',
            'label' => __('Google Maps'),
            'name' => 'location',
            'type' => 'google_map',
            'instructions' => __('kies een locatie uit op de kaart'),
            'center_lat' => '52',
            'center_lng' => '6',
            'zoom' => '8',
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
    'description' => __('Layout: Google Maps'),
  ));
});
