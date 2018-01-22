<?php $gravityform_id = get_sub_field('gravityform_id'); ?>

<section class="gravityform">

  <div class="row py-3 justify-content-center">

    <div class="col-8">

      <?php if($gravityform_id > 0): ?>

        <?php gravity_form( $gravityform_id, false, false, false, '', false ); ?>

      <?php else: ?>

        <div class="alert alert-warning"><?= __('Kies een formulier.'); ?></div>

      <?php endif; ?>

    </div>

  </div>

</section>
