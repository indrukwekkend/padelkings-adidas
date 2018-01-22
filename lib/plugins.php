<?php
/**
 * Theme Plugins
 */
namespace Roots\Sage\Plugins;

add_action( 'after_setup_theme', function() {

    $plugins = array(
      array(
        'name'               => 'Advanced Custom Fields Pro',
        'slug'               => 'advanced-custom-fields-pro',
        'source'             => '/advanced-custom-fields-pro.zip',
        'external_url'       => 'https://advancedcustomfields.com/',
        'required'           => true,
        'force_activation'   => true,
        'force_deactivation' => true,
      ),
      array(
      'name'               => 'Advanced Custom Fields: Post2Post Add-on',
      'slug'               => 'post-2-post-for-acf',
      'required'           => true,
      'force_activation'   => true,
      'force_deactivation' => true,
      ),
      array(
      'name'               => 'Advanced Custom Fields: Gravityforms Add-on',
      'slug'               => 'acf-gravityforms-add-on',
      'required'           => true,
      'force_activation'   => true,
      'force_deactivation' => true,
      ),
      array(
        'name'               => 'Gravity Forms',
        'slug'               => 'gravityforms',
        'source'             => '/gravityforms.zip',
        'external_url'       => 'https://gravityforms.com/',
        'required'           => true,
        'force_activation'   => true,
        'force_deactivation' => true,
      ),
      array(
        'name'               => 'Yoast SEO',
        'slug'               => 'wordpress-seo',
        'required'           => false,
        'force_activation'   => false,
        'force_deactivation' => false,
      ),
      array(
        'name'               => 'Post Types Order',
        'slug'               => 'post-types-order',
      ),
    );

    $config = array(
        'id'           => 'sage',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
});
