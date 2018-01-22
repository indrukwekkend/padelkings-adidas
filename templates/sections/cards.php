<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="cards bg-light">

  <div class="container py-4">

    <?php get_template_part('templates/sections/parts/title'); ?>

    <?php if( have_rows('items') ): ?>

      <div class="row mb-4 justify-content-center">

        <div class="card-deck">

          <?php  while( have_rows('items') ) : the_row(); ?>

            <?php get_template_part('templates/sections/parts/cards','item'); ?>

          <?php endwhile; ?>

        </div>

      </div>

    <?php endif; ?>

  </div>

</section>
