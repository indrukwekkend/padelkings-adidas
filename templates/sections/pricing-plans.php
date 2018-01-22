<?php // Version: v1.0.0 ?>

<section id="<?= strtolower( get_sub_field('title') ); ?>" class="pricing-plans">

  <div class="container py-5">

    <div class="row">
      <div class="col-12">
        <h1 class="display-4 mb-4 text-center"><?php the_sub_field('title'); ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <?php the_sub_field('description'); ?>
        </div>
      </div>
    </div>

    <?php if( have_rows('items') ): ?>

      <div class="row justify-content-center">

        <div class="col-12">

            <?php  while( have_rows('items') ) : the_row(); ?>

                <?php get_template_part('templates/sections/parts/pricing-plan','item'); ?>

            <?php endwhile; ?>

          </div>

        </div>

      </div>

    <?php endif; ?>
  </div>
</section>
