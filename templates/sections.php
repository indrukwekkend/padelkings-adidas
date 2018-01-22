<?php

if( have_rows('layouts') ) :

  while( have_rows('layouts') ) : the_row();

    if( locate_template( 'templates/sections/'.get_row_layout() . '.php' ) ):

      get_template_part('templates/sections/' . get_row_layout() );

    else:

      ?>

      <div class="alert alert-warning">
        <?php _e('Geen layout gevonden in "templates/sections/'.get_row_layout().'".', 'sage'); ?>
      </div>

      <?
    endif;

  endwhile;

endif;
