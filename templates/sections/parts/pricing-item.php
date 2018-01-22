<?php use Roots\Sage\Extras; ?>
<?php // Version: v2.0.1 ?>

<?php if( get_sub_field('image') ): ?>
	<div class="row">
		<div class="col my-3 text-center">
			<?= Extras\get_image_tag( get_sub_field('image') ); ?>
		</div>
	</div>
<?php endif; ?>

<?php if( have_rows('list') ): ?>

	<?php  while( have_rows('list') ) : the_row(); ?>

		<div class="row align-items-center pt-1 pb-3">

      <?php if( get_sub_field('number') ): ?>
        <div class="col-1 text-center">
          <strong><?php the_sub_field('number'); ?>.</strong>
        </div>
      <?php endif; ?>

      <?php if( get_sub_field('label') or get_sub_field('description') ): ?>
        <div class="col col-md-9">

          <?php if( get_sub_field('label') ): ?>
            <div class="row">
              <div class="col">
                <strong><?php the_sub_field('label'); ?></strong>
              </div>
            </div>
          <?php endif; ?>

          <?php if( get_sub_field('description') ): ?>
            <div class="row">
              <div class="col">
                <small class="text-muted"><?php the_sub_field('description'); ?></small>
              </div>
            </div>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if( get_sub_field('price') ): ?>
        <div class="col col-md-2 text-right">
          &euro; <?php the_sub_field('price'); ?>
        </div>
      <?php endif; ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>
