<section <?= ( get_sub_field('title') ) ? 'id="'.strtolower( str_replace( ' ','-', get_sub_field('title') ) ).'"' : '' ; ?> class="cards">

  <div class="container pt-5">

    <div class="row <?= get_sub_field('visual_toggle'); ?> align-items-center">

      <div class="col-12 <?= (get_sub_field('media_toggle') == "image") ? 'col-md-7 pr-5' : 'col-md-6'; ?> py-4">

        <?php get_template_part('templates/sections/parts/title'); ?>

        <?php the_sub_field('content'); ?>

      </div>

      <div class="col-12 col-md p-0 text-center">
        <?php get_template_part('templates/sections/parts/side_by_side', get_sub_field('media_toggle') ); ?>
      </div>

    </div>

  </div>

</section>
