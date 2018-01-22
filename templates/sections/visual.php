<?php if( get_sub_field('toggle') == "full" ): ?>

  <section class="visual container-fluid" style="background-image:url(<?php the_sub_field('image'); ?>);background-size:cover;background-position:center; min-height:480px; ">
  </section>

<?php else: ?>

  <section class="visual container">

    <div class="row py-3">

      <div class="col-12 text-center">

        <img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>

      </div>

    </div>

  </section>

<?php endif; ?>
