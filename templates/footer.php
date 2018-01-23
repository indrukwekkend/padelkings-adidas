
<?php if( get_field('gravityform_id','option') > 0): ?>

  <section class="bg-light">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-8">
          <?php gravity_form( get_field('gravityform_id','option'), false, false, false, '', false ); ?>
        </div>

      </div>
    </div>
  </section>

  <?php endif; ?>

<footer class="container-fluid bg-footer">

  <div class="row justify-content-center">

    <div class="col-12 col-md-8">
      <div class="row py-3">

        <div class="col-6 text-left">
          <p class="text-muted">
            <small>Copyright &copy; <?= date('Y') ?>
              <a href="<?= esc_url(home_url('/')); ?>" title="<?= bloginfo('name'); ?>">
                <?= bloginfo('name'); ?>
              </a>
            </small>
          </p>
        </div>

        <div class="col-6 text-right">
          <p class="text-muted">
            <small>Realisatie: <a href="https://indrukwekkend.nl/" title="Indrukwekkend">Indrukwekkend</a></small>
          </p>
        </div>

      </div>
    </div>

  </div>

</footer>
