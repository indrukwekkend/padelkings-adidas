<?php
/**
 * Advanced Custom Fields
 */
namespace Roots\Sage\Fields;

$sage_includes = [
	'lib/fields/pricing.php',              // Prijslijsten
	'lib/fields/gravityforms.php',         // Gravity Forms
	'lib/fields/columns.php',              // Columns
	'lib/fields/display.php',              // Display
	'lib/fields/visual-text.php',          // Visual
	'lib/fields/cards.php',                // Visual
	'lib/fields/maps.php',                 // Google Maps
	'lib/fields/maps-multi.php',           // Google Maps Multi
	'lib/fields/side-by-side.php',         // Side By Side
	'lib/fields/carousel.php',             // Carousel
	'lib/fields/facebook.php',             // Facebook Add-on
];
foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );

add_action('acf/init', function(){

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
    	'key' => 'group_layouts',
    	'title' => 'Layouts',
    	'fields' => array(
    		array(
    			'key' => 'field_layouts',
    			'label' => 'Layouts',
    			'name' => 'layouts',
    			'type' => 'flexible_content',
    			'instructions' => '',
    			'layouts' => array(

            /*====== Pricing ======*/
            'layout_pricing' => array(
              'key' => 'layout_pricing',
              'name' => 'pricing',
              'label' => 'Prijslijsten',
              'display' => 'block',
              'sub_fields' => array(
                array(
                	'key' => 'field_clone_pricing',
                	'label' => 'Clone Prijslijsten',
                	'name' => 'clone_pricing',
                	'type' => 'clone',
                	'clone' => array(
                		0 => 'group_pricing',
                	),
                	'display' => 'seamless',
                	'layout' => 'block',
                ),
              ),
            ),

            /*====== Gravity Forms ======*/
            'layout_gravityforms' => array(
              'key' => 'layout_gravityforms',
              'name' => 'gravityforms',
              'label' => 'Gravity Forms',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_gravityforms',
                  'label' => 'Clone Gravity Forms',
                  'name' => 'clone_gravityforms',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_gravityforms',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Columns ======*/
            'layout_columns' => array(
              'key' => 'layout_columns',
              'name' => 'columns',
              'label' => 'Columns',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_columns',
                  'label' => 'Clone Columns',
                  'name' => 'clone_columns',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_columns',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Display ======*/
            'layout_display' => array(
              'key' => 'layout_display',
              'name' => 'display',
              'label' => 'Titel tekst',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_display',
                  'label' => 'Clone Display',
                  'name' => 'clone_display',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_display',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Visual ======*/
            'layout_visual' => array(
              'key' => 'layout_visual_text',
              'name' => 'visual_text',
              'label' => 'Visual',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_visual_text',
                  'label' => 'Clone Visual Text',
                  'name' => 'clone_visual Text',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_visual_text',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Cards ======*/
            'layout_cards' => array(
              'key' => 'layout_cards',
              'name' => 'cards',
              'label' => 'Cards',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_cards',
                  'label' => 'Clone Cards',
                  'name' => 'clone_cards',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_cards',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Google Maps ======*/
            'layout_maps' => array(
              'key' => 'layout_maps',
              'name' => 'maps',
              'label' => __('Google Maps'),
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_maps',
                  'label' => 'Clone Google Maps',
                  'name' => 'clone_maps',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_google_maps',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Google Maps Multi ======*/
            'layout_maps_multi' => array(
              'key' => 'layout_maps_multi',
              'name' => 'maps_multi',
              'label' => __('Google Maps Locaties'),
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_maps',
                  'label' => 'Clone Google Maps Multi',
                  'name' => 'clone_maps_multi',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_google_maps_multi',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Side By Side ======*/
            'layout_side_by_side' => array(
              'key' => 'layout_side_by_side',
              'name' => 'side_by_side',
              'label' => __('Side By Side'),
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_side_by_side',
                  'label' => 'Clone Side By Side',
                  'name' => 'clone_side_by_side',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_side_by_side',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

            /*====== Facebook Add-on ======*/
            'layout_facebook' => array(
              'key' => 'layout_facebook',
              'name' => 'facebook',
              'label' => 'facebook',
              'display' => 'block',
              'sub_fields' => array(
                array(
                	'key' => 'field_clone_facebook',
                	'label' => 'Clone Facebook',
                	'name' => 'clone_facebook',
                	'type' => 'clone',
                	'clone' => array(
                		0 => 'group_facebook',
                	),
                	'display' => 'seamless',
                	'layout' => 'block',
                ),
              ),
            ),
          ),
    			'button_label' => __('Voeg layout toe'),
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
    	'style' => 'seamless',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'active' => 1,
    ));
  endif;
});
