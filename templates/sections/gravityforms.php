<?php $gravityform_id = get_sub_field('gravityform_id'); ?>

<section id="contact" class="gravityform">

  <div class="container">

    <div class="row py-3 text-center">
      <div class="col-12">
        <h5>CONTACT</h5>
      </div>
    </div>

    <div class="row py-3 justify-content-center">

      <div class="col-12 col-md-8">

        <?php if($gravityform_id > 0): ?>

          <?php gravity_form( $gravityform_id, false, false, false, '', false ); ?>

        <?php else: ?>

          <div class="alert alert-warning"><?= __('Kies een formulier.'); ?></div>

        <?php endif; ?>

      </div>

    </div>

  </div>

</section>
