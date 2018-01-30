<?php use Roots\Sage\Assets; ?>
<?php if( get_field('gravityform_id','option') > 0): ?>

  <section class="bg-footer">
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

  <div class="row justify-content-center text-center ">

    <div class="col-12 col-md-8">
      <div class="row py-5">

        <div class="col-12 col-md-3 text-md-left">
          <img class="img-fluid" src="<?= Assets\asset_path('images/allforpadel.png');?>" />
        </div>

        <div class="col-12 col-md-9 text-md-right">
          <div class="row pt-4 pt-md-0">
            <div class="col-12">
              <strong>contact: </strong><a href="mailto:<?php the_field('general_email','option'); ?>"><?php the_field('general_email','option'); ?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-muted">
                <small>Realisatie: <a class="text-muted" href="https://indrukwekkend.nl/" title="Indrukwekkend" target="_blank">Indrukwekkend</a></small>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</footer>
