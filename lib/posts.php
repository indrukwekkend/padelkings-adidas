<?php

namespace Roots\Sage\Posts;

/**
 * Custom Post Types
 */
function create_post_type() {

  $labels = array(
    'name'                  => _x( 'Post Types', 'Post Type General Name', 'sage' ),
    'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'sage' ),
    'menu_name'             => __( 'Post Types', 'sage' ),
    'name_admin_bar'        => __( 'Post Type', 'sage' ),
    'archives'              => __( 'Item Archives', 'sage' ),
    'attributes'            => __( 'Item Attributes', 'sage' ),
    'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
    'all_items'             => __( 'All Items', 'sage' ),
    'add_new_item'          => __( 'Add New Item', 'sage' ),
    'add_new'               => __( 'Add New', 'sage' ),
    'new_item'              => __( 'New Item', 'sage' ),
    'edit_item'             => __( 'Edit Item', 'sage' ),
    'update_item'           => __( 'Update Item', 'sage' ),
    'view_item'             => __( 'View Item', 'sage' ),
    'view_items'            => __( 'View Items', 'sage' ),
    'search_items'          => __( 'Search Item', 'sage' ),
    'not_found'             => __( 'Not found', 'sage' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
    'featured_image'        => __( 'Featured Image', 'sage' ),
    'set_featured_image'    => __( 'Set featured image', 'sage' ),
    'remove_featured_image' => __( 'Remove featured image', 'sage' ),
    'use_featured_image'    => __( 'Use as featured image', 'sage' ),
    'insert_into_item'      => __( 'Insert into item', 'sage' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
    'items_list'            => __( 'Items list', 'sage' ),
    'items_list_navigation' => __( 'Items list navigation', 'sage' ),
    'filter_items_list'     => __( 'Filter items list', 'sage' ),
  );

  $args = array(
    'label'                 => __( 'Post Type', 'sage' ),
    'description'           => __( 'Post Type Description', 'sage' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ), // Add supports
    'taxonomies'            => array( 'category', 'post_tag', 'link_category', 'post_format', 'custom_taxonomy' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',// or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'name_of_post_type', $args );
}

function create_taxonomies() {

  $labels = array(
    'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'sage' ),
    'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'sage' ),
    'menu_name'                  => __( 'Taxonomy', 'sage' ),
    'all_items'                  => __( 'All Items', 'sage' ),
    'parent_item'                => __( 'Parent Item', 'sage' ),
    'parent_item_colon'          => __( 'Parent Item:', 'sage' ),
    'new_item_name'              => __( 'New Item Name', 'sage' ),
    'add_new_item'               => __( 'Add New Item', 'sage' ),
    'edit_item'                  => __( 'Edit Item', 'sage' ),
    'update_item'                => __( 'Update Item', 'sage' ),
    'view_item'                  => __( 'View Item', 'sage' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'sage' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'sage' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
    'popular_items'              => __( 'Popular Items', 'sage' ),
    'search_items'               => __( 'Search Items', 'sage' ),
    'not_found'                  => __( 'Not Found', 'sage' ),
    'no_terms'                   => __( 'No items', 'sage' ),
    'items_list'                 => __( 'Items list', 'sage' ),
    'items_list_navigation'      => __( 'Items list navigation', 'sage' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );

  // Registering the taxonomy
  register_taxonomy( 'taxonomy', array( 'name_of_post_type' ), $args );
}

// Create the post type
//add_action( 'init', __NAMESPACE__ . '\\create_post_type' );

// Create the taxonomies
//add_action( 'init', __NAMESPACE__ . '\\create_taxonomies' );

?>
