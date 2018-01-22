<?php if( get_sub_field('title') or get_sub_field('lead') ): ?>
  <div class="row pb-3 text-center">

    <div class="col-12">

      <?php if( get_sub_field('title') ): ?>
        <h1 class="mb-3 display-4">
          <?php the_sub_field('title'); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_sub_field('lead') ): ?>
        <p class="lead">
          <?php the_sub_field('lead'); ?>
        </p>
      <?php endif; ?>

    </div>

  </div>
<?php endif; ?>
