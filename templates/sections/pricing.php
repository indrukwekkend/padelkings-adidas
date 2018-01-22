<section id="<?= strtolower( get_sub_field('title') ); ?>" class="pricing">

  <div class="container py-3">

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

    <?php if( have_rows('pricing_items') ): ?>

      <div class="row justify-content-center">
        <div class="col-12">

          <?php $i = 0; ?>
          <ul class="nav nav-pills nav-justified" id="pricing-tabs" role="tablist">
            <?php  while( have_rows('pricing_items') ) : the_row(); ?>

              <?php $identity = "tab-".$i; ?>
              <?php $flag = ($i < 1)?'active':''; $i++; ?>

              <li class="nav-item">
                <a class="nav-link <?= $flag; ?>" id="label-<?= $identity; ?>" data-toggle="tab" href="#<?= $identity; ?>" role="tab" aria-controls="<?= $identity; ?>" aria-selected="true">
                  <?php the_sub_field('title'); ?>
                </a>
              </li>

            <?php endwhile; ?>
          </ul>

          <?php $i = 0; ?>
          <div class="tab-content pt-2" id="pricing-tabs-content">
            <?php  while( have_rows('pricing_items') ) : the_row(); ?>

              <?php $identity = "tab-".$i; ?>
              <?php $flag = ($i < 1)?'show active':''; $i++; ?>

              <div class="tab-pane fade <?= $flag; ?>" id="<?= $identity; ?>" role="tabpanel" aria-labelledby="label-<?= $identity; ?>">
                <?php get_template_part('templates/sections/parts/pricing','item'); ?>
              </div>

            <?php endwhile; ?>

          </div>

        </div>
      </div>

    <?php endif; ?>
  </div>
</section>
