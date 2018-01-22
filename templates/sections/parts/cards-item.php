<div class="card card-shadow">

  <div class="card-body pt-5 text-center">

    <?php if( get_sub_field('title') ): ?>
      <h5 class="card-title mb-4">
        <?php the_sub_field('title'); ?>
      </h5>
    <?php endif; ?>

    <?php if( get_sub_field('lead') ): ?>
      <h6 class="card-subtitle text-muted">
        <?php the_sub_field('lead'); ?>
      </h6>
    <?php endif; ?>

    <?php if( get_sub_field('content') ): ?>
      <div class="card-text">
        <?php the_sub_field('content'); ?>
      </div>
    <?php endif; ?>

  </div>

</div>
