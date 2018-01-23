<?php
$sage_includes = [
	'vendor/autoload.php',     // Autoload
	'lib/assets.php',          // Scripts and stylesheets
	'lib/extras.php',          // Custom functions
	'lib/posts.php',           // Custom post types
  'lib/fields.php',          // Advanced Custom Fields
  'lib/pages.php',           // Advanced Custom Fields: Option Pages
	'lib/plugins.php',         // Theme plugins
	'lib/setup.php',           // Theme setup
	'lib/titles.php',          // Page titles
	'lib/wrapper.php',         // Theme wrapper class
	'lib/customizer.php',      // Theme customizer
];
foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );

//removeIf(production)
// BrowserSync reload on post save
add_action('save_post', function() {
  $args = ['blocking' => false];
  wp_remote_get('http://'.$_SERVER['SERVER_ADDR'].':3000/__browser_sync__?method=reload', $args);
} );
//endRemoveIf(production)
