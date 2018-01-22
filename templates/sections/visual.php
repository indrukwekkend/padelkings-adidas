<?php

$tag_start = ( get_sub_field('url') )? 'a target="_blank" href="'.get_sub_field('url').'"' : 'section';
$tag_end = ( get_sub_field('url') )? 'a' : 'section';

?>

<?php if( get_sub_field('toggle') == "full" ): ?>

  <<?= $tag_start;?> class="visual container-fluid" style="background-image:url(<?php the_sub_field('image'); ?>);background-size:cover;background-position:center; min-height:480px; ">
  </<?= $tag_end;?>>

<?php else: ?>

  <<?= $tag_start;?> class="visual container">

    <div class="row py-3">

      <div class="col-12 text-center">

        <img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>

      </div>

    </div>

  </<?= $tag_end;?>>

<?php endif; ?>
