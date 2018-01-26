<section class="carousel">
	<?php if( have_rows('items') ): ?>

		<div id="carousel" class="carousel slide" data-ride="carousel">

      <?php if( get_field('indicators_toggle') == 'on'): ?>

  			<ol class="carousel-indicators">

  				<?php $i = 0; ?>

  				<?php while( have_rows('items') ): the_row(); ?>

  					<?php $flag = ($i < 1)?'active':''; ?>

  					<li data-target="#carousel" data-slide-to="<?= $i; ?>" class="<?= $flag; ?>"></li>

  					<?php $i++; ?>

  				<?php endwhile; ?>

  			</ol>

      <?php endif;?>

			<div class="carousel-inner">

					<?php $i = 0; ?>

					<?php while( have_rows('items') ): the_row(); ?>

						<?php $flag = ($i < 1)?'active':''; $i++; ?>

						<div class="carousel-item <?= $flag; ?>">

							<?php get_template_part('templates/sections/parts/carousel','item'); ?>

						</div>

					<?php endwhile; ?>


			</div>

      <?php if( get_field('prev_next_toggle') == 'on' ): ?>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Vorige</span>
        </a>

        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Volgende</span>
        </a>
      <?php endif; ?>

		</div>

	<?php endif; ?>
</section>
