<section class="brands">

	<?php if( have_rows('brands') ) : ?>

		<div class="row py-3">

			<?php  while( have_rows('brands') ) : the_row(); ?>

			<?php $image = get_sub_field('image'); ?>
			<?php $size = 'large'; ?>
			<?php $thumb = $image['sizes'][ $size ]; ?>
			<?php $width = $image['sizes'][ $size . '-width' ];?>
			<?php $height = $image['sizes'][ $size . '-height' ];?>
			<?php $title = $image['title']; ?>
			<?php $alt = $image['alt']; ?>

				<div class="col-12 col-md text-center">

					<figure class="figure">

						<img class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>" src="<?= $thumb; ?>" width="<?= $width; ?>" height="<?= $height; ?>" >

						<?php if( get_sub_field('caption') ) : ?>

							<figcaption class="figure-caption">
								<?php the_sub_field('caption'); ?>
							</figcaption>

						<?php endif; ?>

					</figure>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</section>
