<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="cards bg-light">

	<div class="container py-4">

    <?php get_template_part('templates/sections/parts/title'); ?>

		<?php if( have_rows('items') ): ?>

			<div class="row card-deck mb-4 justify-content-middle">

				<?php  while( have_rows('items') ) : the_row(); ?>

					<?php get_template_part('templates/sections/parts/cards','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
