<?php
/*
 * Title:           Google Maps layout
 * Description:     Displays a marker in Google Maps
 * Version:         v1.0.1
 *
 * Field Map:
 * title (text)
 * lead (text)
 * location (location)
 *
 * Files:
 * templates/sections/maps.php
 */

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_google_maps',
    'title' => __('Google Maps'),
    'fields' => array(
      array(
  			'key' => 'field_maps_title',
  			'label' => __('Titel'),
  			'name' => 'title',
  			'type' => 'text',
        'instructions' => __('Voer een titel in'),
  		),
      array(
  			'key' => 'field_maps_lead',
  			'label' => __('Ondertitel'),
  			'name' => 'lead',
  			'type' => 'text',
        'instructions' => __('Voer een ondertitel in'),
  		),
      array(
        'key' => 'field_maps_description',
        'label' => __('Marker omschrijving'),
        'name' => 'description',
        'type' => 'text',
        'instructions' => __('Voer hier de tekst in voor wanneer er op de marker word geklikt'),
        'wrapper' => array(
          'width' => '70',
        ),
      ),
      array(
  			'key' => 'field_maps_height',
  			'label' => __('Hoogte van de kaart'),
        'instructions' => __('Voer de gewenste hoogte in'),
  			'name' => 'height',
  			'type' => 'number',
        'default_value' => 400,
        'append' => 'px',
        'wrapper' => array(
          'width' => '15',
        ),
  		),
      array(
  			'key' => 'field_maps_zoom',
  			'label' => __('Zoom van de kaart'),
        'instructions' => __('Voer de gewenste zoom in (1-20)'),
  			'name' => 'zoom',
  			'type' => 'number',
        'default_value' => 10,
        'append' => 'px',
        'wrapper' => array(
          'width' => '15',
        ),
        'min' => 1,
        'max' => 20,
        'step' => 1,
  		),
      array(
        'key' => 'field_maps_location',
        'label' => __('Google Maps'),
        'name' => 'location',
        'type' => 'google_map',
        'instructions' => __('kies een locatie uit op de kaart'),
        'center_lat' => '52',
        'center_lng' => '6',
        'zoom' => '8',
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
