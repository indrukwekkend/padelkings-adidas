
<?php $gravityform_id = get_sub_field('gravityform_id'); ?>

<?php if($gravityform_id > 0): ?>

	<section class="gravityform">

		<div class="row py-3 justify-content-center">

			<div class="col-8">

				<?= do_shortcode('[gravityform id="'.$gravityform_id.'" title="false" description="false"]'); ?>

			</div>

		</div>

	</section>

<?php endif; ?>
