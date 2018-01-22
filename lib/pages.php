<?php

/**
 * Advanced Custom Fields: Option pages
 *
 * Field Map:
 * Algemeen Telefoonmummer (text)
 * Algemeen Emailadres (text)
 */
namespace Roots\Sage\Pages;

add_action('acf/init', function(){

  if( function_exists('acf_set_options_page_capability') ):

    acf_set_options_page_capability( 'manage_options' );

  endif;

  if( function_exists('acf_add_options_page') ):

    acf_add_options_sub_page(array(
      'page_title' => __('Algemene Contact Informatie'),
      'menu_title' => __('Contact Informatie'),
      'capability' => 'manage_options',
      'parent_slug' => 'options-general.php',
      'position' => 2,
    ));

  endif;

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_contact_informatie',
      'title' => 'Opties',
      'fields' => array(

        array(
          'key' => 'field_general_telefoon',
          'label' => __('Algemeen telefoonnummer'),
          'name' => 'general_phone',
          'type' => 'text',
          'instructions' => 'Voer hier het algemene telefoonnummer in',
          'placeholder' => '(072) 562 54 82',
        ),

        array(
          'key' => 'field_general_email',
          'label' => __('Algemeen emailadres'),
          'name' => 'general_email',
          'type' => 'text',
          'instructions' => 'Voer hier het algemene emailadres in',
          'placeholder' => __('info@domein.nl'),
        ),

      ),
      'location' => array(
        array(
          array(
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'acf-options-contact-informatie',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'seamless',
      'label_placement' => 'left',
      'instruction_placement' => 'label',
      'active' => 1,
      'description' => 'Algemene contact informatie',
    ));

  endif;

});
