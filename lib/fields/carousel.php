<?php
/*
* Title:           Jumbotron layout
* Description:     Manages the content for Jumbotron
* Docs:            https://getbootstrap.com/docs/4.0/components/carousel/
* Version:         v2.0.0
*
* Field Map:
* title (text)
* items (repeater)
* - title (text)
* - content (text)
*
* Files:
* templates/sections/carousel.php
* templates/sections/parts/carousel-item.php
*/

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_carousel',
    'title' => __('Carousel'),
    'fields' => array(

      array(
        'key' => 'field_carousel_tab_1',
        'label' => __('Items'),
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_carousel_items',
        'label' => __('Carousel'),
        'name' => 'items',
        'type' => 'repeater',
        'instructions' => '',
        'collapsed' => 'field_carousel_item_image',
        'layout' => 'table',
        'button_label' => __('Item toevoegen'),
        'sub_fields' => array(

          array(
            'key' => 'field_carousel_item',
            'label' => __('Inhoud'),
            'name' => 'item',
            'type' => 'group',
            'instructions' => '',
            'wrapper' => array(
              'width' => '90',
            ),
            'layout' => 'block',
            'sub_fields' => array(

              array(
                'key' => 'field_carousel_title',
                'label' => __('Titel'),
                'name' => 'title',
                'type' => 'text',
                'instructions' => __('Voer hier de titel in.'),
                ),
                array(
                  'key' => 'field_carousel_lead',
                  'label' => __('Ondertitel'),
                  'name' => 'lead',
                  'type' => 'text',
                  'instructions' => __('Voer hier een ondertitel in.'),
                ),
                array(
                  'key' => 'field_carousel_cta_items',
                  'label' => __('Call To Action'),
                  'name' => 'cta-item',
                  'type' => 'repeater',
                  'instructions' => '',
                  'collapsed' => 'field_carousel_label',
                  'layout' => 'table',
                  'button_label' => __('Voeg knop toe'),
                  'sub_fields' => array(

                    array(
                      'key' => 'field_carousel_label',
                      'label' => __('Label'),
                      'name' => 'label',
                      'type' => 'text',
                      'instructions' => __('Voer hier de tekst in van de CTA.'),
                      'required' => 1,
                      'wrapper' => array(
                        'width' => '40',
                      ),
                    ),
                    array(
                      'key' => 'field_carousel_url',
                      'label' => __('URL'),
                      'name' => 'url',
                      'type' => 'text',
                      'instructions' => __('Voer hier de link in van de CTA'),
                      'required' => 1,
                      'wrapper' => array(
                        'width' => '40',
                      ),
                    ),
                    array(
                      'key' => 'field_carousel_color',
                      'label' => __('Kleur'),
                      'name' => 'color',
                      'type' => 'select',
                      'instructions' => __('kies hier de kleur van de knop.'),
                      'wrapper' => array(
                        'width' => '20',
                      ),
                      'choices' => array(
                        'btn-primary' => 'Primair',
                        'btn-secondary' => 'Secondair',
                        'btn-pink' => 'Roze',
                        'btn-lime' => 'Limoen',
                      ),
                      'default_value' => array(
                        'btn-primary' => 'Primair',
                      ),
                      'ui' => 1,
                      'ajax' => 1,
                      'return_format' => 'value',
                    ),
                  ),
                ),
              ),
            ),
            array(
              'key' => 'field_carousel_item_image',
              'label' => __('Afbeelding'),
              'name' => 'image',
              'type' => 'image',
              'instructions' => __(''),
              'wrapper' => array(
                'width' => '10',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => 1920,
              'min_height' => 500,
            ),
          ),
        ),
        array(
          'key' => 'field_carousel_tab_2',
          'label' => __('Instellingen'),
          'type' => 'tab',
          'placement' => 'top',
          'endpoint' => 0,
        ),

        array(
          'key' => 'field_carousel_indicators_toggle',
          'label' => __('Indicators'),
          'name' => 'indicators_toggle',
          'type' => 'button_group',
          'choices' => array(
            'on' => __('Aan'),
            'off' => __('Uit'),
          ),
          'allow_null' => 0,
          'default_value' => 'on',
          'layout' => 'horizontal',
          'return_format' => 'value',
          'wrapper' => array(
            'width' => '30',
          ),
        ),

        array(
          'key' => 'field_carousel_prev_next_toggle',
          'label' => __('Volgende/Vorige knoppen'),
          'name' => 'prev_next_toggle',
          'type' => 'button_group',
          'choices' => array(
            'on' => __('Aan'),
            'off' => __('Uit'),
          ),
          'allow_null' => 0,
          'default_value' => 'on',
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
      'active' => 1,
      'description' => '',
    ));

  endif;
