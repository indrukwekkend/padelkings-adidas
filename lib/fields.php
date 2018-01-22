<?php
/**
 * Advanced Custom Fields
 */
namespace Roots\Sage\Fields;

$sage_includes = [
	'lib/fields/pricing.php',          // Prijslijsten
	'lib/fields/gravityforms.php',     // Gravity Forms
	'lib/fields/columns.php',          // Columns
	'lib/fields/display.php',          // Display
	'lib/fields/visual.php',           // Visual
	'lib/fields/cards.php',            // Visual
	'lib/fields/maps.php',             // Google Maps
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
              'key' => 'layout_visual',
              'name' => 'visual',
              'label' => 'Visual',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_visual',
                  'label' => 'Clone Visual',
                  'name' => 'clone_visual',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_visual',
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
