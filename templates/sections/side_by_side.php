<?php use Roots\Sage\Extras; ?>

<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="cards bg-light">

	<div class="container py-4">

    <?php get_template_part('templates/sections/parts/title'); ?>


    <div class="row <?= get_sub_field('toggle'); ?>">
      <div class="col-12 col-md-6">
        <?php the_sub_field('content'); ?>
      </div>
      <div class="col-12 col-md-6 p-0">
        <?php echo Extras\get_image_tag( get_sub_field('image'), 'large', 'img-fluid'); ?>
      </div>
    </div>

	</div>

</section>
