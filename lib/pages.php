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
          'instructions' => __('Voer hier het algemene telefoonnummer in'),
          'placeholder' => __('(072) 562 54 82'),
        ),

        array(
          'key' => 'field_general_email',
          'label' => __('Algemeen emailadres'),
          'name' => 'general_email',
          'type' => 'text',
          'instructions' => __('Voer hier het algemene emailadres in'),
          'placeholder' => __('info@domein.nl'),
        ),

        array(
          'key' => 'field_general_social',
          'label' => __('Social Media'),
          'name' => 'general_social_items',
          'type' => 'repeater',
          'instructions' => __('Voeg hier de social media diensten toe'),
          'layout' => 'table',
          'button_label' => __('Dienst toevoegen'),
          'sub_fields' => array(
            array(
              'key' => 'field_social_item_service',
              'label' => __('Dienst'),
              'name' => 'service',
              'type' => 'select',
              'value' => NULL,
              'wrapper' => array(
                'width' => '20',
              ),
              'choices' => array(
                'facebook' => 'Facebook',
                'instagram' => 'Instagram',
                'twitter' => 'Twitter',
                'youtube-play' => 'YouTube',
                'linkedin' => 'Linkedin',
                'pinterest' => 'Pinterest',
                'google-plus' => 'Google+',
              ),
              'default_value' => array(
              ),
              'allow_null' => 0,
              'multiple' => 0,
              'ui' => 1,
              'ajax' => 0,
              'return_format' => 'value',
            ),
            array(
              'key' => 'field_social_item_username',
              'label' => __('Gebruikersnaam'),
              'name' => 'username',
              'type' => 'text',
              'instructions' => __('Naam van het profiel'),
              'value' => NULL,
              'wrapper' => array(
                'width' => '40',
              ),
            ),
            array(
              'key' => 'field_social_item_url',
              'label' => __('URL'),
              'name' => 'url',
              'type' => 'text',
              'instructions' => __('URL naar profiel pagina'),
              'value' => NULL,
              'wrapper' => array(
                'width' => '40',
              ),
            ),
          ),
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
      'description' => __('Algemene contact informatie'),
    ));

  endif;

});
