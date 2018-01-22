<section class="quote">

	<div class="row py-3 text-center">

		<div class="col-12">

			<blockquote class="blockquote">

				<?php the_sub_field('content');?>

				<?php if( get_sub_field('source') ) : ?>

					<footer class="blockquote-footer">
						<?php the_sub_field('source'); ?>
					</footer>

				<?php endif; ?>

			</blockquote>

		</div>

	</div>

</section>
