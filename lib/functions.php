<?php

namespace Roots\Sage\Functions;

$sage_includes = [
	'lib/functions/video_api.php',     // YouTube/Vimeo embedding
	'lib/functions/image_api.php',     // YouTube/Vimeo embedding
];
foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );
