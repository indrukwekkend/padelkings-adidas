<section <?= ( get_sub_field('title') ) ?strtolower( str_replace( ' ','-', get_sub_field('title') ) ) : '' ; ?> class="cards bg-light">

  <div class="container <?= ( get_sub_field('title') ) ? 'pt-4' : '' ; ?>">

    <?php get_template_part('templates/sections/parts/title'); ?>

    <div class="row <?= get_sub_field('visual_toggle'); ?>">

      <div class="col-12 col-md-6 py-4">
        <?php the_sub_field('content'); ?>
      </div>

      <div class="col-12 col-md-6 p-0">
        <?php get_template_part('templates/sections/parts/side_by_side', get_sub_field('media_toggle') ); ?>
      </div>

    </div>

  </div>

</section>
